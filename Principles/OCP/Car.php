<?php
namespace SOLID\OCP;

class Car extends Vehicle implements IVehicle
{

    public function move(): string
    {
        return "I'm a car and i am moving";
    }
}