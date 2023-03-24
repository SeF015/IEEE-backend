<?php

function change_permissions($file){
    if(!is_file($file)){
        echo "This is not a file.<br>";
        return;
    }
    $fileinfo = pathinfo($file);
    if(!($fileinfo["extension"] == "txt")){
        echo "This is not a txt file.<br>";
        return;
    }
    chmod($file, 0700);
    echo "Permissions Changed. <br>";
    return;
}

// Test Cases

echo change_permissions("Elzero"); // This Is Directory And Only Files Allowed
echo change_permissions("Work.docx"); // File Extension Is Not Txt
echo change_permissions("Result.txt"); // Permissions Changed