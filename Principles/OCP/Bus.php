<?php
/**
 * Created by PhpStorm.
 * User: Osama
 * Date: 1/19/2022
 * Time: 4:07 PM
 */

namespace SOLID\OCP;


class Bus extends Vehicle implements IVehicle
{
    /**
     * @var int
     */
    private $busNumber;

    /**
     * @var int
     */
    private $numberOfPassengers;

    /**
     * @var int
     */
    private $doors;
    public function __construct($busNubmer)
    {
       $this->setBusNumber($busNubmer) ;
    }

    /**
     * @return int
     */
    public function getNumberOfPassengers(): int
    {
        return $this->numberOfPassengers;
    }

    /**
     * @param int $numberOfPassengers
     */
    public function setNumberOfPassengers(int $numberOfPassengers): void
    {
        $this->numberOfPassengers = $numberOfPassengers;
    }

    /**
     * @return int
     */
    public function getDoors(): int
    {
        return $this->doors;
    }

    /**
     * @param int $doors
     */
    public function setDoors(int $doors): void
    {
        $this->doors = $doors;
    }

    /**
     * @return mixed
     */
    public function getBusNumber() : int
    {
        return $this->busNumber;
    }

    /**
     * @param mixed $busNumber
     */
    public function setBusNumber($busNumber): void
    {
        $this->busNumber = $busNumber;
    }

    /**
     * @return string
     */
    public function move() : string
    {
        $movementDestinations = '';
        foreach ($this->getRoutes() as $route){
            $movementDestinations .= "<p>I am moving now from ". $route->getSource().
                " to ".$route->getDestination()." with maximum Speed ". $this->getMaximumSpeed().
                ". The Bus Driver name is ". $this->getDriver()->getName()
                ."</p>";
        }
        return $movementDestinations;
    }
}
