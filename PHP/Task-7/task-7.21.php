<?php
function check_status($a, $b, $c) {
    foreach(func_get_args() as $type){
        if(gettype($type) == "string"):
            $a=$type;
        endif;
        if(gettype($type) == "integer"):
            $b = $type;
        endif;
        if (gettype($type) == "boolean"):
            $c = $type;
        endif;
    }
    return "Hello $a, Your Age Is $b, You Are ". ($c== true?"Available":"Not Available") ." For Hire<br>";
  }

  echo check_status("Osama", 38, true); // "Hello Osama, Your Age Is 38, You Are Available For Hire"
echo check_status(38, "Osama", true); // "Hello Osama, Your Age Is 38, You Are Available For Hire"
echo check_status(true, 38, "Osama"); // "Hello Osama, Your Age Is 38, You Are Available For Hire"
echo check_status(false, "Osama", 38); // "Hello Osama, Your Age Is 38, You Are Not Available For Hire"