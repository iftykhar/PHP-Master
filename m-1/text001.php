<?php
//practicing abstract class
abstract class Vehicle{
    abstract public function getBaseFare(): int;

    abstract public function getPerKiloFare(): int;

    public function getTotal($kilo){
        return $this->getBaseFare() + ($this->getPerKiloFare() * $kilo);
    }

}

class Normal{
    public function ecg($name){
        return 'you are'.$name;
    }

    // public function ecg($name,$age){
    //     return 'you are'.$name.'and you are'.$age.'years old';
    // }
}

interface HourlyRentable{
    public function getHourlyRate(): int;
}

interface DailyRentable{
    public function getDailyRate(): int;
}

class Car extends Vehicle implements HourlyRentable,DailyRentable{
    public function getBaseFare(): int
    {
     return 50;   
    }

    public function getPerKiloFare(): int
    {
        return 15;
    }

    public function getHourlyRate(): int
    {
        return 60;
    }

    public function getDailyRate(): int
    {
        return 100;
    }

}

class Bike extends Vehicle {
    public function getBaseFare(): int
    {
        return 10;
    }
    public function getPerKiloFare(): int
    {
        return 10;
    }
}

class CNG extends Vehicle{
    public function getBaseFare(): int
    {
        return 30;
    }

    public function getPerKiloFare(): int
    {
        return 13;
    }
}

$obj = new CNG();
$total = $obj->getTotal(4);

var_dump($total);