    <!--Konten/isi-->

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Slider</h1>

      </div>
      <div class="row justify-content-end">
        <div class="col-lg-6">
          <form action="" method="get">
            <div class="input-group mb-3">
              <input type="text" name="cari" value="<?= @$cari ? $cari : ""; ?>" class="form-control" placeholder="Apa cari kak/bg?" aria-label="Recipient's username" aria-describedby="button-addon2">
              <input type="hidden" name="folder_admin" value="slider">
              <input type="hidden" name="file" value="index">
              <button class="btn btn-outline-primary" type="submit" id="button-addon2"><span data-feather="search"></span></button>
              <a href="index.php?folder_admin=slider&file=create" class="btn btn-success"><span data-feather="plus-circle"></span></a>
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
                <th>Label</th>
                <th>Body</th>
                <th>Gambar</th>
                <th>Action</th>
              </tr>
              <?php
              $where = "";
              if (@$cari) {
                $where = "where label like '%$cari%'";
              }
              $dataPost = allData($table = "slide", $where);
              $no = 0;
              foreach ($dataPost as $item) {
                $no++;


              ?>

                <tr>
                  <td><?= $no ?></td>
                  <td><?= $item['label'] ?></td>
                  <td><?= $item['body'] ?></td>
                  <td><img src="../images/<?= $item['gambar'] ?>" style="width: 100px;"></td>

                  <td>
                    <a href="index.php?folder_admin=slider&file=update&id=<?= $item['id']?>" class="btn btn-warning">
                      <span data-feather="edit"></span>
                    </a>
                    <form action="index.php?folder_admin=slider&file=delete" method="post" class="d-inline">
                      <input type="hidden" name="id" value="<?= $item['id'] ?>">
                      <button type="submit" onclick="return confirm('Apakah anda yakin ingin menghapus <?= $item['label'] ?> ?')" class="btn btn-danger ">
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