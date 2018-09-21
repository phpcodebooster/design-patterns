<?php


/*
| -------------------------------------------------------------------------
| L2T Framework
| -------------------------------------------------------------------------
|
| User: spatel
| Date: 21/09/18
| Time: 3:50 PM
| Version: 1.0
| Website: http://www.phpcodebooster.com
*/

namespace App\Creational\AbstractFactory;


use App\Creational\AbstractFactory\Products\Button;
use App\Creational\AbstractFactory\Products\CheckBox;

interface GUIFactory
{
    public function createButton(): Button;
    public function createCheckbox(): CheckBox;
}