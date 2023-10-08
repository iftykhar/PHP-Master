<?php
// practice composition vs inheritence 

// use Vehicle as GlobalVehicle;


//vehicle has-a engine

// object -> compose 

use Random\Engine as RandomEngine;

class Vehicle{

    private Engine $engine;

    public function start(){
        $this->engine->start();
    }
    public $criteria;

    public function random(){

    }
}

//bus is-a vehicle
class Bus  {

    private Engine $engine;

    public function start(){
        
    }

}

class Bike{

}

class Engine{

    private $model;
    private $brand;

    public function start(){

    }
}


//using inheritance here
class mobile {

}

// apple is a mobile 
class apple extends mobile{
    
}

// iphone is a apple mobile 
class iphone extends apple{
    
}