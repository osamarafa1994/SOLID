<?php
namespace SOLID\OCP;

class Plane extends Vehicle implements IVehicle
{
    public function move(): string
    {
        return "I'm a Plane and i am flying";
    }
}
