<!-- Konten/Isi-->
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Tambah Kategori</h1>
    </div>
    <div class="row">
        <div class="col-lg-8">
            <form action="" method="post" enctype="multipart/form-data" class="row g-3 needs-validation" novalidate>
                <div class="mb-3">
                    <label class="form-label">Nama Kategori</label>
                    <div class="input-group">
                        <span class="input-group-text" id="basic-addon1"><i class="bi bi-card-text"></i></span>
                        <input type="text" name="nama_kategori" class="form-control" required placeholder="Nama Kategori">
                        <div class="invalid-feedback">
                            Silahkan Masukan Nama Kategori
                        </div>
                    </div>
                </div>

                <button class="btn btn-primary" name="simpan" type="submit">Submit form</button>
            </form>
        </div>
    </div>


</main>
<?php
extract($_POST);
//cek apakah tombol sudah di klik
if (isset($simpan)) {

    $dataPost = [
        'nama_kategori' => $nama_kategori,
    ];
    //jalankan funsi insert
    insert($table = "kategori", $dataPost);
    //direct ke halaman index
    echo "<script>location='index.php?folder_admin=kategori&file=index&pesan=Data Berhasil di Tambahkan'</script>";
}
?>
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
</script>
<!-- Konten/Isi-->