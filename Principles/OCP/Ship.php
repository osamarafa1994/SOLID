<?php
namespace SOLID\OCP;

class Ship extends Vehicle implements IVehicle
{

    public function move(): string
    {
        return "I'm a Ship and i am floating";
    }
}