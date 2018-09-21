<?php


/*
| -------------------------------------------------------------------------
| L2T Framework
| -------------------------------------------------------------------------
|
| User: spatel
| Date: 21/09/18
| Time: 3:54 PM
| Version: 1.0
| Website: http://www.phpcodebooster.com
*/

namespace App\Creational\AbstractFactory;

use App\Creational\AbstractFactory\Interfaces\Button;

class WinButton implements Button
{
    public function press()
    {
        echo "Window button is pressed." .PHP_EOL;
    }
}