<!--Konten/isi-->

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Tambah Vaksin</h1>

  </div>
  <div class="col-lg-12">
    <form action="" method="post" enctype="multipart/form-data" class="row g-3 needs-validation" novalidate>
      <div class="col-lg-4 mb-3">
        <label class="form-label">ID Vaksin</label>
        <div class="input-group">
          <input type="text" name="id_vaksin" class="form-control" required placeholder="ID Vaksin">
          <div class="invalid-feedback">
            Tidak boleh kosong!
          </div>
        </div>
      </div>

      <div class="col-lg-4 mb-3">
        <label class="form-label">NO KTP</label>
        <div class="input-group">
          <input type="number" name="no_ktp" class="form-control" required placeholder="NO KTP">
          <div class="invalid-feedback">
            Tidak boleh kosong!
          </div>
        </div>
      </div>

      <div class="col-lg-4 mb-3">
        <label class="form-label">Nama Lengkap</label>
        <div class="input-group">
          <input type="text" name="nama_lengkap" class="form-control" required placeholder="Nama Lengkap">
          <div class="invalid-feedback">
            Tidak boleh kosong!
          </div>
        </div>
      </div>

      <div class="col-lg-6 mb-3">
        <label class="form-label">No TLPN</label>
        <div class="input-group">
          <input type="number" name="no_telpon" class="form-control" required placeholder="No TLPN">
          <div class="invalid-feedback">
            Tidak boleh kosong!
          </div>
        </div>
      </div>

      <div class="col-lg-6 mb-3">
        <label for="" class="form-label">Jenis Kelamin</label>
          <select class="form-select form-select-md" name="jenis_kelamin" id="">
            <option value="pria">Pria</option>
            <option value="wanita">Wanita</option>
          </select>
      </div>

      <div class="mb-3">
        <label class="form-label">Alamat</label>
        <textarea type="text" name="alamat" class="form-control" required placeholder="Alamat" id=""></textarea>
        <div class="invalid-feedback">
          Tidak boleh kosong!
        </div>
      </div>

      <div class="col-lg-4 mb-3">
        <label for="" class="form-label">Vaksin Ke</label>
        <select class="form-select form-select-md" name="id_vaksinke" id="">
          <?php
          $vaksinke = allData($table = "vaksinke");
          foreach ($vaksinke as $item) {
          ?>


            <option value="<?= $item['id_vaksinke'] ?>">
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


            <option value="<?= $item['id_jenisvaksin'] ?>">
              <?= $item['nama_vaksin'] ?>
            </option>
          <?php } ?>
        </select>
      </div>

      <div class="mb-3">
        <label class="form-label">Tempat Vaksin</label>
        <textarea type="text" name="tempat vaksin" class="form-control" required placeholder="Tempat vaksin" id=""></textarea>
        <div class="invalid-feedback">
          Tidak boleh kosong!
        </div>
      </div>


      <!-- </div> -->
      <div class="col-lg-2 mb-3">
      <button class="btn btn-primary" name="simpan" type="submit">Simpan</button>
      </div>
    </form>

  </div>





</main>
<?php
extract($_POST);
//cek apakah tombol sudah di klik

if (isset($simpan)) {
  
      //insert table post
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
      //jalan fungsi insert
      insert($table="vaksin",$dataPost);
      //direct ke halaman index
      echo "<script>location='index.php?folder_admin=vaksin&file=index&pesan=Data Berhasil Di Tambahkan'</script>";

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

<!--Konten/isi-->