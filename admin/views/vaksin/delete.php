<?php
extract($_POST);
if(isset($id_vaksin)){
    delete($table="vaksin",$where= "id_vaksin = '$id_vaksin'");
    echo "<script>location='index.php?folder_admin=vaksin&file=index&pesan=Data Berhasil Di hapus'</script>";
}else{
    echo "<script>location='index.php?folder_admin=vaksin&file=index'</script>";
}
