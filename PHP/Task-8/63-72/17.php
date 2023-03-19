<?php
$nums = [1, 2, 3, 4, 5, 6];
$idx = [];
for($i = 0; $i<6; $i++){
    $r = rand(0,1);
    if($r) array_unshift($idx, $nums[$i]);
    else array_push($idx, $nums[$i]);
}

$nums = $idx;

echo '<pre>';
print_r($nums);
echo '<pre>';
