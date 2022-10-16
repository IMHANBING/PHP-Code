<?php

interface User
{

    function getDiscount();

    function getUserType();
}

class VipUser implements User
{
    private $discount = 0.88;

    function getDiscount()
    {
        return $this->discount;
    }

    function getUserType()
    {
        return "VipUser";
    }
}

class SVipUser implements User
{
    private $discount = 0.7;

    function getDiscount()
    {
        return $this->discount;
    }

    function getUserType()
    {
        return "SVipUser";
    }
}

class Goods
{
    public $quantity;
    public $price;
    private $Users;

    function show($userType, $quantity, $price)
    {
        $this->price = $price;
        $this->quantity = $quantity;
        $this->Users = $userType;

        if($this->Users instanceof User){
            echo "<br>原价是:" . $this->quantity * $this->price . "<br>";
            echo "会员级别：" . $this->Users->getUserType() . "<br>" .
                "打折后的价格:" . $this->Users->getDiscount() * $this->quantity * $this->price . "<br>";
        } else {
            echo "类型错误";
        }
    }
}
$vip = new VipUser();
$g = new Goods();
$g->show($vip,2,10);

$vip = new SVipUser();
$g = new Goods();
$g->show($vip,2,20);