<?php
  $a = 100;
  $b = 200;
  $c = 100;
  
  
    //Variable "b" Larger Than Variable "a"
    if($b > $a){
        echo"Yes";
    }
    //Variable "a" Identical To Variable "c"
    elseif ($a === $c) {
        echo "Yes";
    }
    //Variable "a" Plus Variable "c" Identical To Variable "b"
    elseif ($a + $c === $b) {
        echo "Yes";
    }
    
?>