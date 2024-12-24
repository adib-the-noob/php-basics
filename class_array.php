<?php 

class Car{
    public $color;
    public $model;

    public function __construct($color, $model){
        $this->color = $color;
        $this->model = $model;
    }

    public function getInfo(){
        return "This car is a {$this->color} {$this->model}";
    }

} 

$myCar = new Car("red", "Volvo");
$myNewCar = new Car("blue", "BMW-i3");

$myCar = (array)$myCar->getInfo();
$myNewCar = (array)$myNewCar->getInfo();

print_r($myCar);
print_r($myNewCar);