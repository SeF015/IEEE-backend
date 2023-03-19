<?php
$nums = [10, 100, -20, 50, 30];
$min = 100000000000000;
foreach($nums as $num):
    if($num < $min):
        $min = $num;
    endif;
endforeach;
echo $min;