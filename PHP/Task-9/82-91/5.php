<?php

echo basename(__FILE__) . "<br>";
echo pathinfo(__FILE__,2) . "<br>";
echo pathinfo(__FILE__)["filename"].".".pathinfo(__FILE__)["extension"] . "<br>";
echo basename($_SERVER["SCRIPT_FILENAME"]) . "<br>";