<?php

class User{

    public $role;

    public function login(){

    }
}

class Employee extends User{
    public string $name;
    public string $address;
    public string $dob;

    public function getage(){

    }
}

$employee = new Employee();
$employee->login();