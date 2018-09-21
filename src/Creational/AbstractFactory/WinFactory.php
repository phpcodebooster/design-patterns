<?php


/*
| -------------------------------------------------------------------------
| L2T Framework
| -------------------------------------------------------------------------
|
| User: spatel
| Date: 21/09/18
| Time: 3:48 PM
| Version: 1.0
| Website: http://www.phpcodebooster.com
*/

namespace App\Creational\AbstractFactory;

use App\Creational\AbstractFactory\Interfaces\Button;
use App\Creational\AbstractFactory\Interfaces\GUIFactory;

class WinFactory implements GUIFactory
{
    public function createButton(): Button
    {
        return new WinButton();
    }
}