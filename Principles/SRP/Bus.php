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
     * @var string
     */
    private $driverName;
    /**
     * @var int
     */
    private $driverAge;
    /**
     * @var int
     */
    private $doors;
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
        return $this->maximumSpeed. " KM/H";
    }

    /**
     * @param int $maximumSpeed
     */
    public function setMaximumSpeed(int $maximumSpeed): void
    {
        $this->maximumSpeed = $maximumSpeed;
    }

    /**
     * @return string
     */
    public function getDriverName(): string
    {
        return $this->driverName;
    }

    /**
     * @param string $driverName
     */
    public function setDriverName(string $driverName): void
    {
        $this->driverName = $driverName;
    }

    /**
     * @return int
     */
    public function getDriverAge(): int
    {
        return $this->driverAge;
    }

    /**
     * @param int $driverAge
     */
    public function setDriverAge(int $driverAge): void
    {
        $this->driverAge = $driverAge;
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
     * @return array
     */
    public function getRoutes(): array
    {
        return $this->routes;
    }

    /**
     * @param array $routes
     */
    public function setRoutes(array $routes): void
    {
        $this->routes = $routes;
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
}
