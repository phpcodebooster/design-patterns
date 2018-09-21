<?php


/*
| -------------------------------------------------------------------------
| L2T Framework
| -------------------------------------------------------------------------
|
| User: spatel
| Date: 18/09/18
| Time: 6:03 PM
| Version: 1.0
| Website: http://www.phpcodebooster.com
*/
require __DIR__. '/vendor/autoload.php';


// Abstract Factory Design Pattern
$app = new \App\Creational\AbstractFactory\Application(new \App\Creational\AbstractFactory\WinFactory());
$app->run();


// Singleton Design Pattern
$connection = \App\Creational\Singleton\DbConnection::getInstance();
$connection->fetch();