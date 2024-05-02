<?php
extract($_POST);
if(isset($id_user)){
    delete($table="user",$where= "id_user = '$id_user'");
    echo "<script>location='index.php?folder_admin=user&file=index&pesan=Data Berhasil Di hapus'</script>";
}else{
    echo "<script>location='index.php?folder_admin=user&file=index'</script>";
}
