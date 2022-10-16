<?php
$str = "This is a string";
$str1 = substr($str, 0, 4);        //从第一个字符开始，截取4个字符
$str2 = substr($str, 0);        //从第一个字符开始截取，直到字符串的末尾
$str3 = substr($str, 0, -4);        //从第一个字符开始截取，直到字符串末端第4个字符
$str4 = substr($str, -1);        //从字符串末端返回1个字符
echo "str1为" . $str1 . "<br>";
echo "str2为" . $str2 . "<br>";
echo "str3为" . $str3 . "<br>";
echo "str4为" . $str4 . "<br>";

