<?php
function calc($lh,$rh,$op='+'){
    switch ($op) {
        case '+':
            return $lh+$rh;
            break;
        case '-':
            return $lh-$rh;
            break;
        case '*':
            return $lh*$rh;
            break;
        default:
            return "not exist";
            break;
    }
}

echo calc(10, 20); // 30
echo '<br>';
echo calc(10, 20, "+"); // 30
echo '<br>';
echo calc(10, 20, "-"); // -10
echo '<br>';
echo calc(10, 20, "-"); // -10
echo '<br>';
echo calc(10, 20, "*"); // 200
echo '<br>';
echo calc(10, 20, "*"); // 200