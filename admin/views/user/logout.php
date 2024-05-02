<?php
extract($_POST);
if(isset($btnLogout)){
    //hapus session
    unset($_SESSION['email']);
    session_destroy();
    echo "<script>location='index.php'</script>";
}