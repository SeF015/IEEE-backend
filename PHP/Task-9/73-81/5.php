<?php
/*$url1 = "http://www.elz ero.org";
$url2 = "http://¥elzero.org";
$url3 = "https://elzero.org";
$url4 = "https://elzero.o¥rg";*/
$urls = ["http://www.elz ero.org", "http://¥elzero.org", "https://elzero.org", "https://elzero.o¥rg"];
foreach($urls as $url):
    if(filter_var($url, FILTER_VALIDATE_URL, FILTER_NULL_ON_FAILURE )){
        echo "A Valid URL<br>";
    } 
    else 
    echo "Not A Valid URL<br>"; 
endforeach;

