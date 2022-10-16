<?php

    class Person
    {
        public $name;

        public function __construct($name)
        {
            $this->name = $name;
        }
        public function __toString()
        {
            return $this->name; //将成员变量的值返回
        }
        function __call($name, $varr)   //方法名
        {
            //参数列表封装成数组
            echo "$name"."<br>";
            var_dump($varr);

        }

        public static function __callStatic($name, $varr)   //方法名
        {
            //参数列表封装成数组
            echo "$name"."<br>";
            var_dump($varr);
        }

        public function __sleep()
        //清理对象，返回包含应被序列化的变量名数组
        {
            echo "序列化之前，调用该方法";
            return ["name"];
        }

        public function __wakeup()
        //反序列化之前，调用此方法
        {
            $this->name = "张三";
        }

        public function __invoke($value)
        {
            echo $value."PHP"."<br>";
            // TODO: Implement __invoke() method.
        }

    }

    /*

    $p = new Person("Lomoo");
    //序列化：将对象转换成字节流，方便网络传输
    $s = serialize($p);
    var_dump($s);
    //反序列化：将字节流转化成对象
    $us = unserialize($s);

    */

    //Person::run("12km","下坡");   //当类调用未定义的静态方法，程序会自动调用__callStatic()

    /*

    $p = new Person("Lomoo");

    $p->run("10km","上坡");
    //当对象调用未定义方法，程序会自动调用__call

    echo "$p";
    //将对象当作字符串，会自动调用toString方法

    */



    $f = function($value){
        echo $value."雷猴啊，我是匿名函数"."<br>"."<br>";
    };
    var_dump($f);   //object
    $f("Lomoo ");

    $p = new Person("Iris");
    $p("hi");   //将对象当作函数调用会自动调用invoke函数
