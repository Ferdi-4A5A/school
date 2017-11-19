<?php

// __contruct word aangeroepen als new Object() word aangeroepen, new Object() kan je dan parameters meegeven die in contructor worden aangemaakt
// Met private $variable kan je ervoor zorgen dat een variable buiten een functie niet aangepast kan worden

class Person
{
    public $name;
    private $age;

    public function __construct($name) {
        $this->name = $name;
    }

    public function showInfo() {
        return 'Dit is ' . $this->name . ' en zijn/haar leeftijd is ' . $this->age;
    }

    public function setAge($age) {
        if ($age >= 0 && $age <= 150) {
            $this->age = $age;
        }
        return $age;
    }

    public function getAge($age) {
        return $age;
    }

    public function adultOrNot() {
        if ($this->age > 18) {
            return true;
        } else {
            return false;
        }
    }
}

$tim = new Person('Tim', 21);
echo $tim->showInfo();
echo $tim->setAge(150);

$sharron = new Person('Shannon', 21);
echo $sharron->showInfo();

//  (1) $age kan alleen beanderd worden via Getter en Setter methods
//        - age mag alleen integers van 0 tot 150 bevatten, anders mag hij niet geset worden
//  (2) Maak een method die checkt of iemand meerderjarig is of niet (return boolean)
