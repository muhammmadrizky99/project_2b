<?php
extract($_POST);
if(isset($id_kategori)){
    delete($table="kategori",$where = "id_kategori = '$id_kategori'");
    echo "<script>location='index.php?folder_admin=kategori&file=index&pesan=Data Berhasil Di hapus'</script>";
}else{
    echo "<script>location='index.php?folder_admin=kategori&file=index'</script>";
}