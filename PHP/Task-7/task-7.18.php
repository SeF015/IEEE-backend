<?php

function get_arguments(...$arr)
{

    $all="";
   foreach($arr as $value)
   {
    $all.=" $value";
   }

    return $all;

}
// Write Function Content Here

// Needed Output
echo get_arguments("Hello", "Elzero", "Web", "School"); // Hello Elzero Web School
echo '<br>';
echo get_arguments("I", "Love", "PHP"); // I Love PHP