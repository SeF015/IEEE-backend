<?php
$money = ["Ahmed" => 100, "Sayed" => 150, "Osama" => 100, "Maher" => 250];

foreach ($money as $index=>$amount){
    echo "The name is $index I need $amount pounds from him";
    echo '<br>';
}