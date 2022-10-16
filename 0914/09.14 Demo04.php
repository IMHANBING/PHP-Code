<?php
function calculatePrice($price,$discount){   //定义函数calculatePrice()
    $discount_price = $price * $discount;
    echo "商品的原价为".$price."元";
    echo "<br>";
    echo "商品的折扣为".$discount;
    echo "<br>";
    echo "商品的折扣价为".$discount_price."元";
    echo "<br>";
}
$price = 100;
$discount = 0.7;
calculatePrice($price,$discount);  //直接调用函数calculatePrice()
$calculateFunc = "calculatePrice"; //将函数名"calculatePrice"赋值给变量$calculateFunc
$calculateFunc($price,$discount); //调用与变量值同名的函数

