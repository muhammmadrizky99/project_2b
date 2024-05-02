<?php

extract($_GET);

//menjalankan session
session_start();

require_once "../config/fungsi.php";
if (isset($folder_admin) && isset($file)) {
    //cek session//
    if(@$_SESSION['email']){

        $folder_path_admin = "../admin/views/$folder_admin";


        if (is_dir($folder_path_admin)) {
            $file_path_admin = "$folder_path_admin/$file.php";
            if (is_file($file_path_admin)) {
                require_once '../admin/views/layouts/header.php';
                require_once '../admin/views/layouts/nav.php';
                require_once $file_path_admin;
                require_once '../admin/views/layouts/footer.php';
            } else {
                //tampilkan 404.php
                require_once '../admin/views/layouts/header.php';
                require_once '../admin/views/layouts/nav.php';
                require_once '../admin/views/404.php';
                require_once '../admin/views/layouts/footer.php';
            }
        } else {
            //tampilkan 404.php
            require_once '../admin/views/layouts/header.php';
            require_once '../admin/views/layouts/nav.php';
            require_once '../admin/views/404.php';
            require_once '../admin/views/layouts/footer.php';
        }
    }else{
        require_once'../admin/views/login.php';
    }
} else {
    //cek session//
    if(@$_SESSION['email']){
        require_once '../admin/views/layouts/header.php';
        require_once '../admin/views/layouts/nav.php';
        require_once '../admin/views/home.php';
        require_once '../admin/views/layouts/footer.php';

    }else{
        require_once '../admin/views/login.php';
    }
   
}
