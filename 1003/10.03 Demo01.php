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

    function __toString(){
        return $this->name." ".$this->age." ".$this->color;
    }

    function __call(){
        echo "未定义";
    }
}

class Student extends Person    //继承Person类，子类自动调用父类中的方法
{
//    private $Sno;
//
//    //通过构造方法给Sno赋值
//    public function __construct($Sno)
//    {
////        parent::__construct($name, $age, $Sno);
//        $this->Sno = $Sno;
//    }

    const SchoolName = "北京交通大学海滨学院";

    public function getSchoolName()
    {
        echo Student::SchoolName;
        echo self::SchoolName;
    }

    //重写父类方法
    public function speak()
    {
        echo $this->color;
        parent::speak();
        return "Student";
    }
}

$s = new Student("Lomoo", 20);      //空的构造方法
$String = $s->speak();
echo $String;
//$s->getSchoolName();

//echo "外部访问常量" . Student::SchoolName;