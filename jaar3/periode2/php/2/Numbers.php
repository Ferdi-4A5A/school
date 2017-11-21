<?php

    // Je kan maar 1 construct hebben ivm parameters?
    // Op deze manier beter parameters per methode toevoegen?

class Calculate
{
    protected $numbers;
    protected $number1;
    protected $number2;

    public function __construct($numbers) {
        $this->numbers = $numbers;
        $this->result = $numbers[0];
    }

    public function getNumber1() {
        return $this->number1;
    }

    public function getNumber2() {
        return $this->number2;
    }
}

class Add extends Calculate
{
    public function addSingle() {
        $this->result = $this->number1 + $this->number2;
        return $this->result;
    }
    public function addMultiple() {
        $this->result = array_sum($this->numbers);
        return $this->result;
    }
}

class Substract extends Calculate
{
    public function substractSingle() {
        $this->result = $this->number1 - $this->number2;
        return $this->result;
    }
    public function substractMultiple() {
        foreach ($this->numbers as $key => $value) {
            if ($key !== 0) {
                $this->result = $this->result - $value;
            }
        }
        return $this->result;
    }
}

class Multiply extends Calculate
{
    public function multiplySingle() {
        $this->result = $this->number1 * $this->number2;
        return $this->result;
    }
    public function multiplyMultiple() {
        foreach ($this->numbers as $key => $value) {
            if ($key !== 0) {
                $this->result = $this->result * $value;
            }
        }
        return $this->result;
    }
}

$sum1 = new Add(array('15','3','4'));
echo $sum1->addMultiple();

$sum1 = new Substract(array('15','3','1','4'));
echo $sum1->substractMultiple();

$sum1 = new Multiply(array('15','3','1','4'));
echo $sum1->multiplyMultiple();
