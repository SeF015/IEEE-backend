<?php
$file = "Programming/PHP";

if(!file_exists($file)){
    mkdir($file, 0711, 1);
}

if(file_exists($file)){
    rmdir($file);
    if(!file_exists($file)){
        echo "Directory $file Removed.<br>";
    }
    rmdir("Programming");
    if(!file_exists("Programming")){
        echo "Directory Programming Removed.<br>";
    }
}
