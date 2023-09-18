<?php

abstract class Vehicle{
    abstract public function getBaseFare(): int;

    abstract public function getPerKiloFare(): int;

    public function getTotal(){

    }

}

class Car extends Vehicle{
    public function getBaseFare(): int
    {
     return 50;   
    }

}

class Bike extends Vehicle{
    public function getBaseFare(): int
    {
        return 10;
    }
}

class CNG extends Vehicle{
    public function getBaseFare(): int
    {
        return 30;
    }
}
