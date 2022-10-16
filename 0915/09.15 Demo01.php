<?php
$str = "apple,pear,banana,oriange";
$arr=explode(",",$str);
echo "第一次分割的结果为:";
print_r($arr);
echo "<br>";
echo "<br>";
var_dump($arr);
echo "<br>";
echo "<br>";
$arr = explode(",",$str,-2);
echo "第二次分割的结果为:";
print_r($arr);
