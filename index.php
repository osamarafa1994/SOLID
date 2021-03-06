<?php
use SOLID\OCP\Bus;
use SOLID\OCP\Car;
use SOLID\OCP\Driver;
use SOLID\OCP\Plane;
use SOLID\OCP\Route;
use SOLID\OCP\Trip;

require_once __DIR__.DIRECTORY_SEPARATOR.'vendor'.DIRECTORY_SEPARATOR.'autoload.php';

$bus = new Plane(33);
$driver = new Driver('Osama Atafa',33,"w233333r55", "Nasr City");
$route10 = new Route('Sansaft','Cairo',120);
$route20 = new Route('Cairo','Nasr City',50);

$bus->setColor("Red");
//$bus->setDoors(3);
$bus->setDriver($driver);
$bus->setMaximumSpeed(130);
$bus->addRoute($route10);
$bus->addRoute($route20);
$trip = new Trip($bus,"23333",32.33,34);

echo( $bus->move());