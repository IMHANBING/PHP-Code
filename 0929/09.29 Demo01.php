<?php

date_default_timezone_set("PRC");
//static静态的
//静态成员变量 属于类 类名:变量名 self::成员变量
//静态成员方法
class Person{
    public $name;
    public static $SCHOOLNAME = "沧州交通学院";

    public function speak(){
        echo Person::$SCHOOLNAME;
        echo self::$SCHOOLNAME;
    }
}