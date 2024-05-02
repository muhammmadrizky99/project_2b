<!--Konten/isi-->
<?php
if ($id_vaksin) {
    $dataPost = oneData(
        $table = "vaksin",
        $where = "id_vaksin='$id_vaksin'"
    );

    extract($_POST);
    //cek apakah tombol sudah di klik

    if (isset($simpan)) {

        $dataPost = [
            'id_vaksin' => $id_vaksin,
            'no_ktp' => $no_ktp,
            'nama_lengkap' => $nama_lengkap,
            'no_telpon' => $no_telpon,
            'jenis_kelamin' => $jenis_kelamin,
            'alamat' => $alamat,
            'id_vaksinke' => $id_vaksinke,
            'id_jenisvaksin' => $id_jenisvaksin,
            'tempat_vaksin' => $tempat_vaksin,
        ];
        //jalankan funsi insert
        update($table = "vaksin", $dataPost, $where = "id_vaksin='$id_vaksin'");
        //direct ke halaman index
        echo "<script>location='index.php?folder_admin=vaksin&file=index&pesan=Data Berhasil di Tambahkan'</script>";
    }

    if (!is_array($dataPost)) {
        echo "<script>location='index.php?folder_admin=vaksin&file=index&pesan=Data Tidak Ditemukan'</script>";
    }
} else {
    echo "<script>location='index.php?folder_admin=vaksin&file=index&pesan=Data Tidak Ditemukan'</script>";
}
?>


<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Update Vaksin</h1>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <form action="" method="post" enctype="multipart/form-data" class="row g-3 needs-validation" novalidate>

                <div class="col-lg-4 mb-3">
                    <label class="form-label">ID Vaksin</label>
                    <div class="input-group">
                        <input type="text" name="id_vaksin" readonly="readonly" value="<?= $dataPost['id_vaksin'] ?>" class="form-control" required placeholder="ID Vaksin">
                        <div class="invalid-feedback">
                            Tidak boleh kosong !
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-3">
                    <label class="form-label">No KTP</label>
                    <div class="input-group">
                        <input type="number" name="no_ktp" value="<?= $dataPost['no_ktp'] ?>" class="form-control" required placeholder="No KTP">
                        <div class="invalid-feedback">
                            Tidak boleh kosong !
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-3">
                    <label class="form-label">Nama Lengkap</label>
                    <div class="input-group">
                        <input type="text" name="nama_lengkap" value="<?= $dataPost['nama_lengkap'] ?>" class="form-control" required placeholder="Nama Lengkap">
                        <div class="invalid-feedback">
                            Tidak boleh kosong !
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 mb-3">
                    <label for="" class="form-label">No TELP</label>
                    <div class="input-group">
                        <input type="number" name="no_telpon" value="<?= $dataPost['no_telpon'] ?>" class="form-control" required placeholder="No TELP">
                        <div class="invalid-feedback">
                            Tidak boleh kosong !
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mb-3">
                    <label for="" class="form-label">Jenis Kelamin</label>
                    <select class="form-select form-select-md" name="jenis_kelamin" id="">

                        <option value="Pria" <?= $dataPost['jenis_kelamin'] == 'Pria' ? "selected" : "" ?>>Pria</option>
                        <option value="Wanita" <?= $dataPost['jenis_kelamin'] == 'Wanita' ? "selected" : "" ?>>Wanita</option>

                    </select>
                </div>


                <div class="mb-3">
                    <label class="form-label">Alamat</label>
                    <div class="input-group">
                        <textarea rows="5" cols="150" name="alamat" value="" class="form-control" required placeholder="Alamat"><?php echo $dataPost['alamat'] ?></textarea>
                        <div class="invalid-feedback">
                            Tidak boleh kosong !
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 mb-3">
                    <label for="" class="form-label">Vaksin Ke</label>
                    <select class="form-select form-select-md" name="id_vaksinke" id="">
                        <?php
                        $vaksinke = allData($table = "vaksinke");
                        foreach ($vaksinke as $item) {
                        ?>
                            <option <?= $item['id_vaksinke'] == $dataPost['id_vaksinke'] ? "selected" : "" ?> value="<?= $item['id_vaksinke'] ?>">
                                <?= $item['jumlah'] ?>
                            </option>
                        <?php } ?>
                    </select>
                </div>
                <div class="col-lg-8 mb-3">
                    <label for="" class="form-label">Jenis Vaksin</label>
                    <select class="form-select form-select-md" name="id_jenisvaksin" id="">
                        <?php
                        $jenisvaksin = allData($table = "jenisvaksin");
                        foreach ($jenisvaksin as $item) {
                        ?>
                            <option <?= $item['id_jenisvaksin'] == $dataPost['id_jenisvaksin'] ? "selected" : "" ?> value="<?= $item['id_jenisvaksin'] ?>">
                                <?= $item['nama_vaksin'] ?>
                            <?php } ?>
                    </select>
                </div>

                <div class="mb-3">
                    <label class="form-label">Tempat Vaksin</label>
                    <div class="input-group">
                        <textarea rows="5" cols="150" name="tempat_vaksin" class="form-control" required placeholder="Tempat vaksin"><?php echo $dataPost['tempat_vaksin'] ?></textarea>
                        <div class="invalid-feedback">
                            Tidak boleh kosong !
                        </div>
                    </div>
                </div>

                <div class="col-lg-2 mb-3">
                    <button class="btn btn-primary" name="simpan" type="submit">Simpan</button>
                </div>
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
</script>