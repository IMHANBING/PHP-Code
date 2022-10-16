<?php
$var = 2;
$a = 100;
function test()
{
    $var1 = 3;
    global $var;
    echo '$var的值是', "$var" . '<br>';
    echo '$var1的值是', "$var1" . '<br>';
    echo $GLOBALS['a'] . '<br>';
}
test();
print_r($GLOBALS);
