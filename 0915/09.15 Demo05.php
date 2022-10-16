<?php
//下面是字符串替换
$str1 = "I like play football, and he is also like play football";
$str2 = "basketball";
echo "替换前字符串为：" . $str1 . "<br>";
$str = str_replace("football", $str2, $str1, $count);
echo "替换后字符串为：" . $str . "<br>";
echo "字符串中football被替换的次数为" . $count . "<br>";

