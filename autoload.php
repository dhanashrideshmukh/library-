<?php

spl_autoload_register(function ($class_name) {
    $file_path = "$class_name.php";
    $file_path = str_replace('\\', '/', $file_path);
    if (file_exists($file_path)) {
        include $file_path;
    }
    else echo "$class_name not found";
});



