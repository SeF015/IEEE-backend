<?php
$str = 'aAa';
$num = 3;
$char = "_";

// Write Your Code Here
echo str_repeat(substr_replace(strtolower($str),'_',$num,0),$num ); 

// aaa_aaa_aaa_