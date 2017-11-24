<?php

// __contruct word aangeroepen als new Object() word aangeroepen, new Object() kan je dan parameters meegeven die in contructor worden aangemaakt
// Met private $variable kan je ervoor zorgen dat een variable buiten een functie niet aangepast kan worden
// Met protected $variable kan je ervoor zorgen dat een variable in zijn eigen class en subclasses aangepast kan worden

class User
{
    protected $username = null;
    protected $password = null;

    public function __construct($username, $password) {
        $this->username = $username;
        $this->setPassword($password);
    }

    public function doStuff() {

    }

    public function setPassword($password) {
        $this->password = password_hash($password, PASSWORD_DEFAULT);
    }

//    gaat niet hé abstract class als je de hoofdclass moet aanroepen om een User aan te maken..
//    abstract public function doStuff();

    public function checkPassword($password) {
        if (password_verify($password, $this->password)) {
            return true;
        } else {
            return false;
        }
    }

    public function getUsername() {
        return $this->username;
    }

    public function getPassword() {
        return $this->password;
    }
}

class UserSupervisor extends User
{
    public function doStuff() {

    }
}

class UserNormal extends User
{
    public function doStuff() {

    }
}

$user = new User('tomas', 'legend32');
var_dump($user->getPassword());
$user->setPassword('legend32');
var_dump($user->checkPassword('legend32'));

$user = new User('anna', 'whatevah96');
var_dump($user->getPassword());
$user->setPassword('whatevah96');
var_dump($user->checkPassword('whatevah96'));
