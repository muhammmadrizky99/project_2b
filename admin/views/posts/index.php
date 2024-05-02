    <!--Konten/isi-->

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Posts</h1>

      </div>
      <div class="row justify-content-end">
        <div class="col-lg-6">
          <form action="" method="get">
            <div class="input-group mb-3">
              <input type="text" name="cari" value="<?= @$cari ? $cari : ""; ?>" class="form-control" placeholder="Apa cari kak/bg?" aria-label="Recipient's username" aria-describedby="button-addon2">
             <input type="hidden" name="folder_admin" value="posts">
             <input type="hidden" name="file" value="index">
              <button class="btn btn-outline-primary" type="submit" id="button-addon2"><span data-feather="search"></span></button>
              <a href="index.php?folder_admin=posts&file=create" class="btn btn-success"><span data-feather="plus-circle"></span></a>
            </div>
          </form>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-12">
          <div class="table-responsive-lg">
            <table class="table table-hover">
              <tr>
                <th>No</th>
                <th>Judul</th>
                <th>Kategori</th>
                <th>Gambar</th>
                <th>Author</th>
                <th>Action</th>
              </tr>
              <?php
              $where = "";
              if(@$cari){
                $where = "where judul like '%$cari%'";
              }
              $dataPost = allData($table = "posts" ,$where);
              $no = 0;
              foreach ($dataPost as $item) {
                $no++;


              ?>

                <tr>
                  <td><?= $no ?></td>
                  <td><?= $item['judul'] ?></td>

                  <td>
                    <?php
                    $dataKategori = oneData(
                      $table = "kategori",
                      $where = "id_kategori='" . $item['id_kategori'] . "'"
                    );
                    echo is_array($dataKategori) ? $dataKategori['nama_kategori'] : "-";
                    ?>
                  </td>
                  <td><img src="../images/<?= $item['gambar'] ?>" style="width: 100px;"></td>
                  <td>
                  <?php
                    $dataUser = oneData(
                      $table = "user",
                      $where = "id_user='" . $item['id_user'] . "'"
                    );
                    echo is_array($dataUser) ? $dataUser['nama_user'] : "-";
                    ?>
                  </td>
                  <td>
                    <a href="index.php?folder_admin=posts&file=update&id_posts=<?= $item['id_posts']?>" class="btn btn-warning">
                      <span data-feather="edit"></span>
                    </a>
                    <form action="index.php?folder_admin=posts&file=delete" method="post" class="d-inline">
                      <input type="hidden" name="id_posts" value="<?= $item['id_posts'] ?>">
                      <button type="submit" onclick="return confirm('Apakah anda yakin ingin menghapus <?= $item['judul']?> ?')" class="btn btn-danger ">
                        <span data-feather="trash-2"></span>
                      </button>
                    </form>
                  </td>
                </tr>
              <?php
              }
              ?>

            </table>

          </div>
        </div>
      </div>

    </main>

    <!--Konten/isi-->