<?php

// __contruct word aangeroepen als new Object() word aangeroepen, new Object() kan je dan parameters meegeven die in contructor worden aangemaakt
// Met private $variable kan je ervoor zorgen dat een variable buiten een functie niet aangepast kan worden


//Spritesheet = superclass, daarmee selecteer je de spritesheet & oid-> met de child selecteer je welk plaatje je er van wilt <-oid
class Spritesheet
{
    protected $spritesheet = null;

    public function __construct() {
    }

    public function getHTML() {
        return '<span class=" ' . $this->spritesheet . ' ' . $this->spritesheetImage . ' "></span>';
    }
}

class LoLChar1 extends Spritesheet
{
    public function __construct() {
        $this->spritesheet = 'lol';
        $this->spritesheetImage = 'LoLChar1';
    }

    public function jump() {
        return 'Jumping';
    }
}

$LoLChar1 = new LoLChar1();
echo $LoLChar1->getHTML();

class LoLChar2 extends Spritesheet
{
    public function __construct() {
        $this->spritesheet = 'lol';
        $this->spritesheetImage = 'LoLChar2';
    }

    public function swim() {
        return 'Swimming';
    }
}

$LoLChar1 = new LoLChar2();
echo $LoLChar1->getHTML();