<?php
$urls = ["http://www.elz ero.org", "http://¥elzero.org", "https://elzero.org", "https://elzero.o¥rg"];
foreach($urls as $url):
    echo (filter_var($url, FILTER_SANITIZE_URL))."<br>";
endforeach;