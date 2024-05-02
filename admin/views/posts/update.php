<!--Konten/isi-->
<?php
if ($id_posts) {
    $dataPost = oneData(
        $table = "posts",
        $where = "id_posts='$id_posts'"
    );

    extract($_POST);
    //cek apakah tombol sudah di klik

    if (isset($simpan)) {
        $fileGambar = $_FILES['gambar'];
        $namaFileGambar = $fileGambar['name']; //nama file yang di upload

        //cek apakah nama file gambar tersedia
        if ($namaFileGambar) {
            $tempFileGambar = $fileGambar['tmp_name'];
            $folderImages = "../images/$namaFileGambar";
            //cek kondisi upload berhasil
            if (move_uploaded_file($tempFileGambar, $folderImages)) {
                //insert table post
                $dataPost = [
                    'judul' => $judul,
                    'gambar' => $namaFileGambar,
                    'isi' => $isi,
                    'id_kategori' => $id_kategori,
                    'id_user' => $id_user,

                ];
                //jalan fungsi insert
                update($table = "posts", $dataPost, $where = "id_posts='$id_posts'");
                //direct ke halaman index
                echo "<script>location='index.php?folder_admin=posts&file=index&pesan=Data Berhasil Di update'</script>";
            } else {
                echo "File gagal di upload";
            }
        } else {
            //jika tidak upload gambar
            $dataPost = [
                'judul' => $judul,
                'isi' => $isi,
                'id_kategori' => $id_kategori,
                'id_user' => $id_user,

            ];
            //jalan fungsi insert
            update($table = "posts", $dataPost, $where = "id_posts='$id_posts'");
            //direct ke halaman index
            echo "<script>location='index.php?folder_admin=posts&file=index&pesan=Data Berhasil Di Tambahkan'</script>";
        }
    }

    if (!is_array($dataPost)) {
        echo "<script>location='index.php?folder_admin=posts&file=index&pesan=Data Tidak Ditemukan'</script>";
    }
} else {
    echo "<script>location='index.php?folder_admin=posts&file=index&pesan=Data Tidak Ditemukan'</script>";
}
?>

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Update Post</h1>

    </div>
    <div class="col-lg-12">
        <form action="" method="post" enctype="multipart/form-data" class="row g-3 needs-validation" novalidate>
            <div class="mb-3">
                <label class="form-label">Judul</label>
                <div class="input-group">
                    <span class="input-group-text" id="basic-addon1"><i class="bi bi-blockquote-right"></i></span>
                    <input type="text" value="<?= $dataPost['judul'] ?>" name="judul" class="form-control" required placeholder="Judul">
                    <div class="invalid-feedback">
                        Silahkan isi judul
                    </div>
                </div>
            </div>

            <div class="mb-3">
                <label class="form-label">Gambar</label>
                <img id="img-preview" src="../images/<?= $dataPost['gambar'] ?>" class="img-fluid w-50 d-block mb-2" alt="">
                <input type="file" id="gambar" onchange="previewImage()" name="gambar" class="form-control">
                <div class="invalid-feedback">
                    Silahkan Pilih Gambar
                </div>
            </div>

            <div class="mb-3">
                <label class="form-label">Isi</label>
                <input type="text" value="<?= $dataPost['isi'] ?>" id="x" name="isi" class="form-control d-none" required>
                <trix-editor input="x"></trix-editor>
                <div class="invalid-feedback">
                    Silahkan Input Isi
                </div>
            </div>

            <div class="mb-3">
                <label for="" class="form-label">Kategori</label>
                <select class="form-select form-select-md" name="id_kategori" id="">
                    <?php
                    $kategori = allData($table = "kategori");
                    foreach ($kategori as $item) {
                    ?>


                        <option <?= $item['id_kategori'] == $dataPost['id_kategori'] ? "selected" : "" ?> value="<?= $item['id_kategori'] ?>">
                            <?= $item['nama_kategori'] ?>
                        </option>
                    <?php } ?>
                </select>
            </div>

            <div class="mb-3">
                <label for="" class="form-label">Author</label>
                <select class="form-select form-select-md" name="id_user" id="">
                    <?php
                    $kategori = allData($table = "user");
                    foreach ($kategori as $item) {

                    ?>


                        <option <?= $item['id_user'] == $dataPost['id_user'] ? "selected" : "" ?> value="<?= $item['id_user'] ?>">
                            <?= $item['nama_user'] ?>
                        </option>
                    <?php } ?>
                </select>
            </div>
            <!-- </div> -->

            <button class="btn btn-primary" name="simpan" type="submit">Submit form</button>
        </form>

    </div>

</main>
<script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (() => {
        'use strict'

        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        const forms = document.querySelectorAll('.needs-validation')

        // Loop over them and prevent submission
        Array.from(forms).forEach(form => {
            form.addEventListener('submit', event => {
                if (!form.checkValidity()) {
                    event.preventDefault()
                    event.stopPropagation()
                }

                form.classList.add('was-validated')
            }, false)
        })
    })()
    //fungsi preview gambar//
    function previewImage() {
        const image = document.getElementById('gambar');
        const imgPreview = document.getElementById('img-preview');

        imgPreview.style.display = 'block';

        const ofReader = new FileReader();
        ofReader.readAsDataURL(image.files[0]);
        ofReader.onload = function(oFREvent) {
            imgPreview.src = oFREvent.target.result;
        }
    }
</script>