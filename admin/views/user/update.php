<?php
if (@$id_user) {

    $dataPost = oneData(
        $table = "user",
        $where = "id_user='$id_user'"
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
                'nama_user' => $nama_user,
                'email' => $email,
                'password' => $password,
                'gambar' => $namaFileGambar,
                'level' => $level,

                ];
                //jalan fungsi insert
                update($table = "user", $dataPost, $where = "id_user='$id_user'");
                //direct ke halaman index
                echo "<script>location='index.php?folder_admin=user&file=index&pesan=Data Berhasil Di update'</script>";
            } else {
                echo "File gagal di upload";
            }
        } else {
            //jika tidak upload gambar
            $dataPost = [
                'nama_user' => $nama_user,
                'email' => $email,
                'password' => $password,
                'level' => $level,

            ];
            //jalan fungsi insert
            update($table = "user", $dataPost, $where = "id_user='$id_user'");
            //direct ke halaman index
            echo "<script>location='index.php?folder_admin=user&file=index&pesan=Data Berhasil Di Tambahkan'</script>";
        }
    }

    if (!is_array($dataPost)) {
        echo "<script>location='index.php?folder_admin=user&file=index&pesan=Data Tidak Ditemukan'</script>";
    }
} else {
    echo "<script>location='index.php?folder_admin=user&file=index&pesan=Data Tidak Ditemukan'</script>";
}
?>
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Update User</h1>
    </div>
    <div class="row">
        <div class="col-lg-8">
            <form action="" method="post" enctype="multipart/form-data" class="row g-3 needs-validation" novalidate>
                <div class="mb-3">
                    <label class="form-label">Nama User</label>
                    <div class="input-group">
                        <span class="input-group-text" id="basic-addon1"><i class="bi bi-person"></i></span>
                        <input type="text" value="<?= $dataPost['nama_user'] ?>" name="nama_user" class="form-control" required placeholder="Nama User">
                        <div class="invalid-feedback">
                            Silahkan Masukan Nama User
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <div class="input-group">
                        <span class="input-group-text" id="basic-addon1"><i class="bi bi-envelope"></i></span>
                        <input type="email" value="<?= $dataPost['email'] ?>" name="email" class="form-control" required placeholder="Email User">
                        <div class="invalid-feedback">
                            Silahkan Masukan Email
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <label class="form-label">Password</label>
                    <div class="input-group">
                        <span class="input-group-text" id="basic-addon1"><i class="bi bi-key"></i></span>
                        <input type="password" value="<?= $dataPost['password'] ?>" name="password" class="form-control" required placeholder="Password">
                        <div class="invalid-feedback">
                            Silahkan Masukan Password
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <label class="form-label">Gambar</label>
                    <img id="img-preview" src="../images/<?= $dataPost['gambar'] ?>" class="img-fluid w-50 d-block mb-2" alt="">
                    <input type="file" id="gambar" onchange="previewImage()" name="gambar" class="form-control">
                    <div class="invalid-feedback">
                        Silahkan Upload Gambar
                    </div>
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Level</label>
                    <select class="form-select form-select-md" name="level" id="">

                        <option value="1" <?= $dataPost['level'] == '1' ? "selected" : "" ?>>Admin</option>
                        <option value="2" <?= $dataPost['level'] == '2' ? "selected" : "" ?>>Author</option>

                    </select>
                </div>


                <button class="btn btn-primary" name="simpan" type="submit">Submit form</button>
            </form>
        </div>
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