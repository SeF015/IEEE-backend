<?php
$size = filesize("C:\Users\sos\Downloads\\te.mp4");
echo "Size In Megabytes Is ". round($size / pow(1024,2))."<br>";
echo "Size In Kilobytes Is ". round($size / 1024)."<br>";