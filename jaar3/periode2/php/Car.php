<?php

// __contruct word aangeroepen als new Object() word aangeroepen, new Object() kan je dan parameters meegeven die in contructor worden aangemaakt
// Met private $variable kan je ervoor zorgen dat een variable buiten een functie niet aangepast kan worden

class Car
{
    public $brand;
    public $model;
    private $fuel = null;
    private $color;

    public function __construct($brand, $model, $color = 'green') {
        $this->brand = $brand;
        $this->model = $model;
        $this->color = $color;
    }

    public function showInfo() {
        return 'Dit is een ' . $this->color . ' auto en zijn/haar merk is ' . $this->brand;
    }

    public function getFuel() {
        return $this->fuel;
    }

    public function setFuel($fuel) {
        $this->fuel = $fuel;
    }

    public function getColor() {
        return $this->color;
    }

    public function setColor($color) {
        if ($color == 'green' || $color == 'red' || $color == 'blauw') {
            $this->color = $color;
        }
        return $this->color;
    }

    public function sustainableOrNot() {
        if ($this->fuel == 'Electric') {
            return true;
        } else {
            return false;
        }
    }
}

$test = new Car('Ford', 'Mustang');
$test->setFuel('Gasoline');
echo $test->getFuel();
echo $test->showInfo();
echo $test->setColor('red');
var_dump($test->sustainableOrNot());
