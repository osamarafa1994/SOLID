<?php
use SOLID\SRP\Bus;
use SOLID\SRP\Driver;
use SOLID\SRP\Route;

require_once __DIR__.DIRECTORY_SEPARATOR.'vendor'.DIRECTORY_SEPARATOR.'autoload.php';

$bus = new Bus(33);
$driver = new Driver('Osama Atafa',33,"w233333r55", "Nasr City");
$route10 = new Route('Sansaft','Cairo',120);
$route20 = new Route('Cairo','Nasr City',50);

$bus->setColor("Red");
$bus->setDoors(3);
$bus->setDriver($driver);
$bus->setMaximumSpeed(130);
$bus->addRoute($route10);
$bus->addRoute($route20);
echo( $bus->move());