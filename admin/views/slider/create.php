<!--Konten/isi-->

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Tambah Slide</h1>

  </div>
  <div class="col-lg-12">
    <form action="" method="post" enctype="multipart/form-data" class="row g-3 needs-validation" novalidate>
      <div class="mb-3">
        <label class="form-label">Label</label>
        <div class="input-group">
          <span class="input-group-text" id="basic-addon1"><i class="bi bi-blockquote-right"></i></span>
          <input type="text" name="label" class="form-control" required placeholder="label">
          <div class="invalid-feedback">
            Silahkan isi label
          </div>
        </div>
      </div>

      <div class="mb-3">
        <label class="form-label">Body</label>
        <input type="text" name="body" class="form-control" required placeholder="body">
        <div class="invalid-feedback">
          Silahkan Input body
        </div>
      </div>

      <div class="mb-3">
        <label class="form-label">Gambar</label>
        <input type="file" name="gambar" class="form-control" required>
        <div class="invalid-feedback">
          Silahkan Pilih Gambar
        </div>
      </div>

 
      <!-- </div> -->

      <button class="btn btn-primary" name="simpan" type="submit">Submit form</button>
    </form>

  </div>





</main>
<?php
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
        'label' => $label,
        'body' => $body,
        'gambar' => $namaFileGambar

        
      ];
      //jalan fungsi insert
      insert($table="slide",$dataPost);
      //direct ke halaman index
      echo "<script>location='index.php?folder_admin=slider&file=index&pesan=Data Berhasil Di Tambahkan'</script>";

    } else {
      echo "File gagal di upload";
    }
  } else {
    echo "Silahkan upload file gambar";
  }
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