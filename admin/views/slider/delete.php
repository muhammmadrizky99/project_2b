<?php
extract($_POST);
if(isset($id)){
    delete($table="slide",$where= "id = '$id'");
    echo "<script>location='index.php?folder_admin=slider&file=index&pesan=Data Berhasil Di hapus'</script>";
}else{
    echo "<script>location='index.php?folder_admin=slider&file=index'</script>";
}
