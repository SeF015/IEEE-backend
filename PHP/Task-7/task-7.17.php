<?php
function hello($name,$gender=""){
    if ($gender == "male") {
        return "hello MR $name";
    }
    elseif($gender == "female"){
        echo '<br>';
        return "hello miss $name";
    }
    else{
        echo '<br>';
        return "hello  $name";
    }
    
}
echo hello("Osama", "male"); // Hello Mr Osama
echo hello("Eman", "female"); // Hello Miss Eman
echo hello("Sameh"); // Hello Sameh