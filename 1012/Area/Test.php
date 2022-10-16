<?php
include("Area.class.php");

$tri = new Triangle();
$tri->isTriangle(31, 4, 5);
echo "三角形面积：" . $tri->getArea() . "<br>";

$rec = new Rectangle();
$rec->setValue(3, 6);
echo "<br>" . "矩形面积：" . $rec->getArea();