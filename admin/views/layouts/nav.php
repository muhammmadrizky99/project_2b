  <!--navigation-->
  <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3 sidebar-sticky">
      <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link <?= @$folder_admin=="" ? "active" : "" ?>" aria-current="page" href="index.php">
            <span data-feather="home" class="align-text-bottom"></span>
            Dashboard
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?= @$folder_admin=="posts" ? "active" : ""?>" href="index.php?folder_admin=posts&file=index">
            <span data-feather="file-text" class="align-text-bottom"></span>
            Post
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link <?= @$folder_admin=="vaksin" ? "active" : ""?>" href="index.php?folder_admin=vaksin&file=index">
            <span data-feather="file-text" class="align-text-bottom"></span>
            Vaksin
          </a>
        </li>
        
      </ul>

      <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted text-uppercase">
        <span>Data Master</span>
        <a class="link-secondary" href="#" aria-label="Add a new report">
          <span data-feather="plus-circle" class="align-text-bottom"></span>
        </a>
      </h6>
      <ul class="nav flex-column mb-2">
        <li class="nav-item">
          <a class="nav-link <?= @$folder_admin=="kategori" ? "active" : ""?>" href="index.php?folder_admin=kategori&file=index">
            <span data-feather="list" class="align-text-bottom"></span>
            Kategori
          </a>
        </li>


        <li class="nav-item">
          <a class="nav-link <?= @$folder_admin=="slider" ? "active" : ""?>" href="index.php?folder_admin=slider&file=index">
            <span data-feather="grid" class="align-text-bottom"></span>
            Slider
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?= @$folder_admin=="user" ? "active" : ""?>" href="index.php?folder_admin=user&file=index">
            <span data-feather="user" class="align-text-bottom"></span>
            User
          </a>
        </li>

        
        
      </ul>
    </div>
  </nav>
  <!--navigation-->