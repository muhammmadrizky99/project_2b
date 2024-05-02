<?php
extract($_POST);
if(isset($id_posts)){
    delete($table="posts",$where= "id_posts = '$id_posts'");
    echo "<script>location='index.php?folder_admin=posts&file=index&pesan=Data Berhasil Di hapus'</script>";
}else{
    echo "<script>location='index.php?folder_admin=posts&file=index'</script>";
}
