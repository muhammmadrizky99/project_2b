    <!--Konten/isi-->

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Vaksin</h1>

      </div>
      <div class="row justify-content-end">
        <div class="col-lg-6">
          <form action="" method="get">
            <div class="input-group mb-3">
              <input type="text" name="cari" value="<?= @$cari ? $cari : ""; ?>" class="form-control" placeholder="Cari aja" aria-label="Recipient's username" aria-describedby="button-addon2">
             <input type="hidden" name="folder_admin" value="vaksin">
             <input type="hidden" name="file" value="index">
              <button class="btn btn-outline-primary" type="submit" id="button-addon2"><span data-feather="search"></span></button>
              <a href="index.php?folder_admin=vaksin&file=create" class="btn btn-success"><span data-feather="plus-circle"></span></a>
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
                <th>ID Vaksin</th>
                <th>No KTP</th>
                <th>Nama</th>
                <th>No Tlp</th>
                <th>Jenis Kelamin</th>
                <th>Alamat</th>
                <th>Vaksin Ke</th>
                <th>Tempat Vaksin</th>
                <th>Action</th>
              </tr>
              <?php
              $where = "";
              if(@$cari){
                $where = "where nama_lengkap like '%$cari%'";
              }
              $dataPost = allData($table = "vaksin" ,$where);
              $no = 0;
              foreach ($dataPost as $item) {
                $no++;


              ?>

                <tr>
                  <td><?= $no ?></td>
                  <td><?= $item['id_vaksin'] ?></td>
                  <td><?= $item['no_ktp'] ?></td>
                  <td><?= $item['nama_lengkap'] ?></td>
                  <td><?= $item['no_telpon'] ?></td>
                  <td><?= $item['jenis_kelamin'] ?></td>
                  <td><?= $item['alamat'] ?></td>
                  
                  <td>
                    <?php
                    $dataVaksinke = oneData(
                      $table = "vaksinke",
                      $where = "id_vaksinke='" . $item['id_vaksinke'] . "'"
                    );
                    echo is_array($dataVaksinke) ? $dataVaksinke['jumlah'] : "-";
                    ?>
                  </td>
                
                  <td><?= $item['tempat_vaksin'] ?></td>
                  <td>
                    <a href="index.php?folder_admin=vaksin&file=update&id_vaksin=<?= $item['id_vaksin'] ?>" class="btn btn-warning">
                      <span data-feather="edit"></span>
                    </a>
                    <form action="index.php?folder_admin=vaksin&file=delete" method="post" class="d-inline">
                      <input type="hidden" name="id_vaksin" value="<?= $item['id_vaksin'] ?>">
                      <button type="submit" onclick="return confirm('Apakah anda yakin ingin menghapus <?= $item['nama_lengkap']?> ?')" class="btn btn-danger ">
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