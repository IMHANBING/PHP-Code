<?php

abstract class Shape
{
    protected $base;
    protected $height;

    public function setValue($b, $h)
    {
        $this->base = $b;
        $this->height = $h;
    }

    abstract function getArea();
}

class Triangle extends Shape
{
    public $side;

    public function isTriangle($base, $height, $side)
    {
        parent::setValue($base, $height);
        $this->side = $side;

        if ($base + $height > $side &&
            $base + $side > $height &&
            $height + $side > $base) {
            return true;
        } else {
            return false;
        }
    }

    public function getArea()
    {
        if ($this->isTriangle($this->base, $this->height, $this->side)) {
            return ($this->base * $this->height) / 2;
        } else {
            return "不能构成三角形";
        }
    }
}

class Rectangle extends Shape
{
    public function getArea()
    {
        return $this->base * $this->height;
    }
}

