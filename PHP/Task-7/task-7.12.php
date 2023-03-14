<?php
$start = 0;
$mix = [1, 2, 3, "A", "B", "C", 4];

for ($start++;$start < count($mix); $start++) { 
    echo $mix[$start];
    echo '<br>';
}