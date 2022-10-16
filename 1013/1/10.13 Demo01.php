<?php

class Person
{
    public $name;
    public $gender;
    private $age;

    public function __construct($name, $age, $gender)
    {
        $this->name = $name;
        $this->age = $age;
        $this->gender = $gender;
    }

    public function showInfo()
    {
        printf("<div>个人信息<ul><li>姓名:%s</li><li>性别:%s</li>
                      <li>年龄:%d</li></ul></div>",
            $this->name, $this->gender, $this->age);
    }
}

class Student extends Person
{
    public $studentID;
    public $age;
    public $scores;

    public function __construct($studentID, $name, $age, $gender)
    {
        parent::__construct($name, $age, $gender);
        $this->studentID = $studentID;
        $this->age = $age;
    }

    public function showInfo()
    {
        printf("<div>个人信息<ul><li>姓名：%s</li><li>性别:%s</li>
                      <li>年龄:%d</li></ul></div>",
            $this->name, $this->gender, $this->age);
    }

    public function setScores($scores)
    {
        $this->scores["语文"] = $scores["语文"];
        $this->scores["数学"] = $scores["数学"];
        $this->scores["物理"] = $scores["物理"];
        $this->scores["英语"] = $scores["英语"];
    }

    public function showScores()
    {
        print ("<div>学生成绩<ul>");
        foreach ($this->scores as $course => $score){
            printf("<li>{$course}:{$score}</li>");
        }
        printf("</ul></div>");
    }
}

$p = new Person("张三丰",26,"男");
$p->showInfo();
$stu = new Student("1877737338","李晓明","男",19);
$scores = ["语文"=>85,"数学"=>91,"物理"=>89,"英语"=>93];
$stu->setScores($scores);
$stu->showScores();

