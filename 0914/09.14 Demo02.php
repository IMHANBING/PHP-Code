<?php

function sum($a, $b, $c)
{
    switch ($c) {
        case '+' :
            return $a + $b;
        case '-' :
            return $a - $b;
        case '*' :
            return $a * $b;
        case '/' :
            return $a / $b;
        default :
            echo "请重新输入！";
    }
}

echo sum(6, 5, '-') . "<br>";
echo sum(6, 5, '/') . "<br>";
echo sum(5, 6, 4) . "<br>";