<?php
$greet = function($someone)
{
    return "Hello $someone";
};

echo $greet("Osama"); 
echo '<br>';

$greet = fn($someone) => "Hello $someone";
echo $greet("Osama");