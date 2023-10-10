<?php


class Pilot{

    protected AircreaftInterface $aircraft;

    public function __construct(AircreaftInterface $aircraft)
    {
        $this->aircraft = $aircraft;
    }

    public function takeOff(){
        $this->aircraft->fly();
    }
}

// abstract class Aircraft{

//     abstract public function fly();
//     // {
//     //     printf('');
//     // }

// }

interface  AircreaftInterface{
    public function fly();
}

class Plane implements AircreaftInterface{

    public function fly(){
        
        printf("Plane took off");
    }
}

class Chopper implements AircreaftInterface{
    
    public function fly(){

        printf("Chopper Hovering");
    }
}

$chopper = new Chopper();
$plane = new Plane();
$pilot = new Pilot($chopper);
$pilot->takeOff();