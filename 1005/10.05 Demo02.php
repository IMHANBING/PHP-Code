<?php

abstract class Animal
//抽象类中，不一定有抽象方法，但抽象方法一定在抽象类中
{
    abstract function shout();   //定义为抽象方法
}

class Dog extends Animal{
//需要实现抽象类中所有抽象方法

    public function shout()
    {
        echo "汪汪。。"."<br>";
    }

}

class Cat extends Animal{
    public function shout()
    {
        echo "你在狗叫什么";
        // TODO: Implement shout() method.
    }
}

$d = new Dog(); $d->shout();
$c = new Cat(); $c->shout();
