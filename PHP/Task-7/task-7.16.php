<?php
$help_num = 4;
$nums = [2, 4, 5, 6, 10];

for ($i=0; $i <=$help_num ; $i++) { 
    echo $nums[$i]+$nums[$help_num--];
    echo '<br>';   
}
