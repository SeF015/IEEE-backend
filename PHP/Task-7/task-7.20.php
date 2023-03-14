<?php
function mul (...$arg){
    $mult=1 ;
    foreach ($arg as $val){
        if (gettype($val) == "integer"):
            $mult*=$val;
        endif;

        if (gettype($val) <> "string" && gettype($val) == "double"):
            $mult*=(int)$val;
        endif;
    }
    echo $mult;
}

echo mul(10, 20); // 200
echo '<br>';
echo mul("A", 10, 30); // 300
echo '<br>';
echo mul(100.5, 10, "B"); // 1000