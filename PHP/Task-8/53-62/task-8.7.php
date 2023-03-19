<?php
$chars = ["E", 1, 2, "l", "z", "E", "R", "o"];
echo ucfirst(str_replace(['1','2'],[],(strtolower(implode($chars)))));
