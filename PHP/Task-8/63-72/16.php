<?php
$mix = ["A", "C", "B", 1, 100, 3, 2, 6, 5, 7];

echo '<pre>';
print_r(array_values(array_filter($mix, function($item){
    if(gettype($item) == "integer" && ($item&1)) return $item;
})));
echo '<pre>';