<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!---css bootstrap--->
    <link rel="stylesheet" href="bootstrap-5.3.2-dist/css/bootstrap.min.css">
    <title>Portal Berita</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">


</head>
<body class="bg-secondary">
    <div class="container mt-2 pb-2 mb-2 bg-white">

    <!--navbar-->
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" aria-disabled="true">Disabled</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

<!--slide--->
<div class="row">
        <div class="col-md-6 col-lg-6">
        <div id="carouselExampleCaptions" class="carousel slide">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/aleix-espargaro_169.jpeg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Slide Pertama</h5>
        <p>Some representative placeholder content for the first slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/alex-rins-takaaki-nakagami_169.jpeg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Slide Kedua</h5>
        <p>Some representative placeholder content for the second slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/enea-bastianini_169.jpeg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Slide Ketiga</h5>
        <p>Some representative placeholder content for the third slide.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
           
        
<!--header-->

        </div>
        <div class="col-md-6 col-lg-6">

        <div class="card text-bg-dark">
  <img src="images/fabio-quartararo-1_169.jpeg" class="card-img" alt="...">
  <div class="card-img-overlay">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
    <p class="card-text"><small>Last updated 3 mins ago</small></p>
  </div>
</div>
        </div>

        <!--Menu kiri, konten, menu kanan-->
        <div class="row pt-2">
      <div class="col-md-3 col-lg-3">
      <div class="list-group">
  <a href="#" class="list-group-item list-group-item-action active" aria-current="true">
    The current link item
  </a>
  <a href="#" class="list-group-item list-group-item-action">A second link item</a>
  <a href="#" class="list-group-item list-group-item-action">A third link item</a>
  <a href="#" class="list-group-item list-group-item-action">A fourth link item</a>
  <a class="list-group-item list-group-item-action disabled" aria-disabled="true">A disabled link item</a>
</div>

      </div>
      
<!--isi-->
      <div class="col-md-6 col-lg-6">
        <?php
        for ($i=0; $i<10; $i++){
          ?>
      <div class="card mb-2">
  <img src="images/marc-marquez-pol-espargaro-1_169.jpeg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
<?php
}
?>

        
      
      </div>
      <div class="col-md-3 col-lg-3">
      <div class="card" style="width: 18rem;">
  <img src="images/marc-marquez_169_1.jpeg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">An item</li>
    <li class="list-group-item">A second item</li>
    <li class="list-group-item">A third item</li>
  </ul>
  <div class="card-body">
    <a href="#" class="card-link">Card link</a>
    <a href="#" class="card-link">Another link</a>
  </div>
</div>
      </div>

    </div>
    
  </div>
  <!--footer-->
  <div class="row bg-dark text-white">
        <div class="col-md-4 col-lg-4">
          <span class="d-block"><i class="bi bi-file-person-fill text-primary"></i>  Tentang</span>
          <span class="d-block">Nama : Muhammad Rizky</span>
          <span class="d-block">Jurusan : Teknologi Informasi</span>
          <span class="d-block">Program studi : Teknologi Rekayasa Perangkat Lunak</span>
          <span class="d-block">No Tlpn : 082288343323</span>

        </div>
        <div class="col-md-4 col-lg-4">
          <span class="d-block"><i class="bi bi-geo-alt text-primary"></i>  Alamat</span>
          <span class="d-block">Batipuh Selatan, Tanah Datar</span>
        </div>
        <div class="col-md-4 col-lg-4">
          <span class="d-block"><i class="bi bi-geo text-primary"></i> MAP</span> 
          <span class="d-block">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31917.12901257216!2d100.43765691215725!3d-0.539991475110006!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2fd528e683f3459d%3A0xf9ed3f884ae00501!2sSumpur%2C%20Kecamatan%20Batipuh%20Selatan%2C%20Kabupaten%20Tanah%20Datar%2C%20Sumatera%20Barat!5e0!3m2!1sid!2sid!4v1704515117374!5m2!1sid!2sid" width="100%" height="120
            " style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </span> 
        </div>

      </div>
</div>
    
    

    

    

    

    <script src="bootstrap-5.3.2-dist/js/bootstrap.bundle.min.js"></script>
    
</body>
</html>