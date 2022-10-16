<?php

class Person
{
    private $name;
    private $age;

    public function __construct($name, $age)
        //用于给成员变量初始化
    {
        $this->name = $name;
        $this->age = $age;
    }

    public function __set($property_name, $value)
        //赋值
    {
        echo "成员变量 $property_name";
        echo "该成员变量的值是： $value";
        $this->$property_name = $value;
    }

    public function __get($property_name)
        //获取成员变量的值
    {
        return $this->$property_name;
    }

    public function speak()
    {
        echo "<br>姓名：" . $this->name . "<br>";
        echo "<br>年龄：" . $this->age . "<br>";
    }
}

class Student extends Person
{
    private $Sno;

    public function __construct($name, $age, $Sno)
    {
        parent::__construct($name, $age);
        $this->Sno = $Sno;
    }

    public function speak()
    {
        parent::speak();
        echo "<br>学号：" . $this->Sno . "<br>";
    }
}

$s = new Student("iris", 22, 20881156);
$s->speak();
echo "————————";


$p1 = new Person("Lomoo", 21);
$p1->speak();


