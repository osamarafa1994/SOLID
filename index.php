<?php
use SOLID\SRP\Bus;

require_once __DIR__.DIRECTORY_SEPARATOR.'vendor'.DIRECTORY_SEPARATOR.'autoload.php';

$bus = new Bus(33);
$bus->setColor("Red");
$bus->setDoors(3);
$bus->setDriverName("Osama Atafa");
$bus->setDriverAge(33);
$bus->setMaximumSpeed(130);
var_dump($bus->getMaximumSpeed());
