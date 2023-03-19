<?php
$chars = ["A", "B", "C"];

//1
array_push($chars,"D");
//2
$chars = array_merge($chars,["E"]);
//3
$chars[5]="F";
//4
$chars = array_replace($chars,array(6 => "G"));

echo '<pre>';
   print_r($chars);
echo '<pre>';