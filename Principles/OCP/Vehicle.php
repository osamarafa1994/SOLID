<?php
namespace SOLID\OCP;


abstract class Vehicle
{
    /**
     *@var string
     */
    private $color;
    /**
     * @var int
     */
    private $maximumSpeed;
    /**
     * @var Driver
     */
    private $driver;
    /**
     * @var array
     */
    private $routes = [];

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
}