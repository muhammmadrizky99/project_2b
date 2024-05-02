<!-- Konten/Isi-->
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Kategori</h1>
    </div>

    <div class="row justify-content-end">
        <div class="col-lg-6">
            <form action="" method="get">
                <div class="input-group mb-3">
                    <input type="text" name="cari" value="<?= @$cari ? $cari : ""; ?>" class="form-control" placeholder="Apa cari kak/bg?" aria-label="Recipient's username" aria-describedby="button-addon2">
                    <input type="hidden" name="folder_admin" value="kategori">
                    <input type="hidden" name="file" value="index">
                    <button class="btn btn-outline-primary" type="submit" id="button-addon2"><span data-feather="search"></span></button>
                    <a href="index.php?folder_admin=kategori&file=create" class="btn btn-success"><span data-feather="plus-circle"></span></a>
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
                        <th>Nama Kategori</th>
                        <th>Action</th>
                    </tr>
                    <?php
                    $where = "";
                    if(@$cari){
                        $where = "WHERE nama_kategori like '%$cari%'";
                    }
                    $dataPost = allData($table="kategori",$where);
                    $no = 0;
                    foreach($dataPost as $item){
                    $no++;

                    ?>
                    <tr>
                        <td><?=$no ?></td>
                        <td><?=$item['nama_kategori'] ?></td>
                        <td>
                            <a href="index.php?folder_admin=kategori&file=update&id_kategori=<?= $item['id_kategori']?>" class="btn btn-warning">
                            <span data-feather="edit"></span></a>
                            <form action="index.php?folder_admin=kategori&file=delete" method="post" class="d-inline">
                                <input type="hidden" name="id_kategori" value="<?= $item['id_kategori'] ?>">
                                <button type="submit" onclick="return confirm('Apakah anda yakin ingin hapus <?=$item['nama_kategori'] ?>')" class="btn btn-danger"><span data-feather="trash-2"></span></button>
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
<!-- Konten/Isi-->