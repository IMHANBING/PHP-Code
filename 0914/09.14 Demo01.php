<?php
$a = 1;
$b = 2;
$c = $a + $b;
echo "$c" . "<br>";

$c = $a * $b;
echo "$c" . "<br>";

$c = $a / $b;
echo "$c" . "<br>";

//PI*r*r
define("PI", 3.14);
function getCircle($r)
{
    $area = PI * $r * $r;
    return $area;
}

echo getCircle(5);
