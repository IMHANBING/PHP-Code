<?php
    function __autoload($classname){
        require_once $classname . "class.php";
        $obj1 = new MyClass1();
        $obj2 = new MyClass2();
        new Student();
        var_dump($obj1);
        var_dump($obj2);
    }