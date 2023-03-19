<?php
$mix = [1, 2, 3, "A", "B", "C", 7, 8, 9];
$nums = [4, 5, 6];

rsort($mix);
$mix = array_replace($mix,$nums);
sort($mix);

echo '<pre>';
   print_r($mix);
echo '<pre>';