<?php

declare(strict_types=1);

namespace Demo\Basic;

class Util
{
    /**
     * @var int
     */
    public static $topSpeed = 200;

    /**
     * @param Car $car
     * @return string
     */
    public static function washCar(Car $car): string
    {
        return "Washing the car: " . $car->getMake() . " " . $car->getModel() . " of " . $car->getYear();
    }
}