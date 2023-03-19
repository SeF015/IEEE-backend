<?php
$friends = [
    "Ahmed Gamal" => "AG",
    "Osama Mohamed" => "OM",
    "Mahmoud Gamal" => "MG",
    "Ahmed Samy" => "AS"
  ];

  echo '<pre>';
   print_r(array_reverse(array_flip($friends)));
  echo '<pre>';