<?php
//classes and objects in php

class Car{
    public $color;
    public $name;
    function __construct($color,$name){
        $this->color = $color;
        $this->name = $name;
    }
    function message(){
        return "this is my car color=".$this->color."<br><br>this is name=".$this->name."<br>";
        //echo 'this is my car'.$this->$name;
    }
}

$obj = new Car("black","bolwo");
echo $obj->message();
$obj = new Car("green","jaguar");
echo $obj->message();





?>