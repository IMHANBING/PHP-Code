<?php

//习题三 程序题 1
$num = 2020;
echo "十进制：" . $num."<br>";
echo "十六进制：" . dechex($num)."<br>";
echo "八进制：" . decoct($num)."<br>";
echo "二进制：" . decbin($num)."<br>";

//习题三 程序题 2
$sentence = "A foreign language is a weapon in the struggle of life.";
$after = ucwords($sentence);
echo "<br>转换后：".$after."<br>";

//习题三 程序题 3
echo "<br>".nl2br("One \n Two \n")."<br>";

//习题三 程序题 4
$str1 = "\"SELECT * FROM Employee WHERE name = 'Andy' \" ";
$arr = explode('\'',$str1);
foreach ($arr as $v){
    echo $v ;
}
//echo "<br>".$str1."<br>";

//习题三 程序题 5
//$str2 = "<></div>";
//echo $str2;

//习题三 程序题 1

//习题三 程序题 1

//习题三 程序题 1

//习题三 程序题 1

//习题三 程序题 1

//习题三 程序题 1

//习题三 程序题 1