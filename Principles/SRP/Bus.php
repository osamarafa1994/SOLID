<?php
/**
 * Created by PhpStorm.
 * User: Osama
 * Date: 1/19/2022
 * Time: 4:07 PM
 */

namespace SOLID\SRP;


class Bus
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
     *@var string
     */
    private $color;
    /**
     * @var int
     */
    private $maximumSpeed;
    /**
     * @var int
     */
    private $doors;
    /**
     * @var Driver
     */
    private $driver;
    /**
     * @var array 
     */
    private $routes = [];
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
     * @return string
     */
    public function getColor(): string
    {
        return $this->color;
    }

    /**
     * @param string $color
     */
    public function setColor(string $color): void
    {
        $this->color = $color;
    }

    /**
     * @return int
     */
    public function getMaximumSpeed(): string
    {
        return $this->maximumSpeed. " K/H";
    }

    /**
     * @param int $maximumSpeed
     */
    public function setMaximumSpeed(int $maximumSpeed): void
    {
        $this->maximumSpeed = $maximumSpeed;
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
     * @return Driver
     */
    public function getDriver(): Driver
    {
        return $this->driver;
    }

    /**
     * @param Driver $driver
     */
    public function setDriver(Driver $driver): void
    {
        $this->driver = $driver;
    }

    /**
     * @return array
     */
    public function getRoutes(): array
    {
        return $this->routes;
    }

    /**
     * @param Route $route
     */
    public function addRoute(Route $route): void
    {
        $this->routes[] = $route;
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
