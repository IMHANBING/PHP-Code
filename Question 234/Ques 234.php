<?php

class Rectangle1
{
    public $width;
    public $height;

    function __construct($w, $h)
    {
        $this->width = $w;
        $this->height = $h;
    }

    public function getC()
    {
        return ($this->width + $this->height) * 2;
    }

    public function getArea()
    {
        return $this->width * $this->height;
    }

    public function __destruct()
    {
        echo "此对象被销毁";
    }
}

$r = new Rectangle1(2, 3);
echo "周长：" . $r->getC();
echo "面积：" . $r->getArea();

