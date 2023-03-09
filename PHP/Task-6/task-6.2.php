<?php

$name = "elzero";
$$name = "Web";

echo $$name;
echo '<br>';
echo ${$name};
echo '<br>';
echo $elzero;
echo '<br>';
echo nl2br($$name);
echo '<br>';
echo <<<code
${$name}
code;
?>