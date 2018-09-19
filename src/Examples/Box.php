<?php

class Box
{
    /**
     * @var string
     */
    private $color;

    /**
     * @var int
     */
    private $sideLength;

    /**
     * Box constructor.
     *
     * @param string $color
     * @param int $sideLength
     */
    public function __construct(string $color, int $sideLength)
    {
        $this->color = $color;
        $this->sideLength = $sideLength;
    }
}


// Red Box with side 50 [Instance-1]
$box50Red = new Box('red', 50);

// Blue Box with side 80 [Instance -2]
$box80Blue = new Box('blue', 80);