<?php
$file = fopen("elzeroo.txt","c+");

fseek($file, mb_strlen("Hello "));

fwrite($file, "Elzero");
fclose($file);