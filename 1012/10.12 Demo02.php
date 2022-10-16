<?php
abstract class A {  //抽象类中可以没有抽象方法，但抽象方法必须在抽象类中
    function a() {  //构造方法
        echo  "String";
    }
}

class B extends A {
    function b() {  //构造方法
        parent::a(); //访问父类中的构造方法String
        echo "<br>b";
    }
}
$b = new B();       /* $b->b(); */