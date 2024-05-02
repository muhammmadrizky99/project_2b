<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.104.2">
  <title>Dashboard</title>


  <link href="../bootstrap-5.3.2-dist/css/bootstrap.min.css" rel="stylesheet">
  <!--icon bootstrap-->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">



  <!-- Custom styles for this template -->
  <link href="../css/dashboard.css" rel="stylesheet">
  <!--css trix editor-->
  <link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@2.0.8/dist/trix.css">

</head>

<body>

  <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6" href="#">Company name</a>
    <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <input class="form-control form-control-dark w-100 rounded-0 border-0" type="text" placeholder="Search" aria-label="Search">
    <div class="navbar-nav">
      <div class="nav-item text-nowrap">
        <form action="index.php?folder_admin=user&file=logout" method="post">
          <button class="nav-link px-3"onclick="return confirm('Apakah Anda ingin Log Out?')" name="btnLogout" type="submit">
          Log out   <span data-feather="log-out"></span>
          </button>
        </form>       
      </div>
    </div>
  </header>

  <div class="container-fluid">
    <div class="row">