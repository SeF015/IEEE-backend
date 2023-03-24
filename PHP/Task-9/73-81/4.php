<?php

echo "<pre>";


$filter_id = [];
foreach(filter_list() as $filter){
    array_push($filter_id, filter_id($filter));
}
print_r(array_combine($filter_id, filter_list()));

echo "</pre>";