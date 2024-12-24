<?php
 
echo "HACKER one!\n"; 
echo("hacker ONE is Hacker who is not a Hacker!");

class Car{
    public $model;
    public $color;
    public function __construct($model, $color){
        $this->model = $model;
        $this->color = $color;
    }
    public function get_color(){
        return $this->color;
    }
    public function set_color($color){
        $this->color = $color;
    }

    public function car_info(){
        return "My car is a " . $this->model . " and the color is " . $this->color;
    }
}

$car1 = new Car("bmw-i3","red");

echo "\n";
echo $car1->get_color();
echo "\n-----------\n";
echo $car1->car_info();
