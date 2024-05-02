<?php

extract($_GET);

//variable folder dan file

if(isset($folder) && isset($file)){
    $folder_front_end = "views/$folder";

    //jika folder ada di dalam views
    if(is_dir($folder_front_end)){
        $file_front_end = "$folder_front_end/$file.php";
        if(is_file($file_front_end)){
            require_once $file_front_end;
        }else{
            require_once 'views/404.php';
        }

    }else{
        require_once 'views/404.php';
    }
}else{
    require_once 'views/home.php';
}