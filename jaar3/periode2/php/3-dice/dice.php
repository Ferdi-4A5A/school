<?php

// __contruct word aangeroepen als new Object() word aangeroepen, new Object() kan je dan parameters meegeven die in contructor worden aangemaakt
// Met private $variable kan je ervoor zorgen dat een variable buiten een functie niet aangepast kan worden

abstract class Dice
{
    protected $number = null;

    public function __construct() {
        $this->number = mt_rand(1,6);

        switch ($this->number) {
            case 1:
                $this->image = "one";
                break;
            case 2:
                $this->image = "two";
                break;
            case 3:
                $this->image = "three";
                break;
            case 4:
                $this->image = "four";
                break;
            case 5:
                $this->image = "five";
                break;
            case 6:
                $this->image = "six";
                break;
        }
    }

    abstract public function roll();

    public function getNumber() {
        return $this->number;
    }
}

class DiceNormal extends Dice
{
    public function roll() {
        return '<img src="image/dicenormal/dice-six-faces-'.$this->image.'.svg">';
    }
}

class Dice3DNumbers extends Dice
{
    public function roll() {
        return '<img src="image/dice3dnumbers/perspective-dice-'.$this->image.'.svg">';
    }
}

class DiceInverted extends Dice
{
    public function roll() {
        return '<img src="image/diceinverted/inverted-dice-'.$this->number.'.svg">';
    }
}

for($i=0; $i<3; $i++) {
    $dice = new DiceInverted();
    echo $dice->roll();
}