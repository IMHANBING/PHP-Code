<?php

class Person
{
    //进行封装
    private $name;
    private $age;
    public $color = "黄色";

    //成员方法
    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    public function speak()
    {
        echo $this->name . "  " . $this->age;
        return "Person类";
    }

    function __toString()
    {
        return $this->name . " " . $this->age . " " . $this->color . '<br>';
    }

    function __call($name, $arguments)
    {
        echo $name;
        echo $arguments;
        echo "未定义";
    }

    public static function __callStatic($name, $arguments)
    {
        echo "未定义的静态方法";
        echo $name;
        echo $arguments . "<br>";
    }
}

$p = new Person("Lomoo", 20);

$s = serialize($p);
echo "序列化";
echo $s;
var_dump($s);

unserialize($s);


var_dump($p);
echo "<br>";
echo $p;
$p->run();
Person::runTest();