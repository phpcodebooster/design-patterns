<?php


/*
| -------------------------------------------------------------------------
| L2T Framework
| -------------------------------------------------------------------------
|
| User: spatel
| Date: 21/09/18
| Time: 4:05 PM
| Version: 1.0
| Website: http://www.phpcodebooster.com
*/

namespace App\Creational\AbstractFactory;


use App\Creational\AbstractFactory\Interfaces\GUIFactory;

class Application
{
    /**
     * @var Interfaces\Button
     */
    private $button;

    /**
     * @var GUIFactory
     */
    private $factory;

    /**
     * @param GUIFactory $factory
     */
    public function __construct(GUIFactory $factory)
    {
        $this->factory = $factory;
        $this->button = $this->factory->createButton();
    }

    public function run()
    {
        $this->button->press();
    }
}