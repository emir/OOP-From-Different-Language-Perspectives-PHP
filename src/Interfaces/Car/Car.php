<?php

declare(strict_types=1);

namespace Demo\Interfaces\Car;

class Car extends AbstractVehicle
{
    public function __construct($make, $model, $year, $speed, $distance)
    {
        parent::__construct($make, $model, $year, $speed, $distance);
    }

    /**
     * @return string
     */
    public function getInfo(): string
    {
        return "Car Info: " . $this->year . " " . $this->make . " " . $this->model . ". Distance: " . $this->distance . " km. and traveling at " . $this->speed . "kmph.";
    }

    /**
     * @param int $distance
     * @return void
     */
    public function go(int $distance): void
    {
        $this->distance += $distance;
    }

    /**
     * @param int $speed
     * @return void
     */
    public function accelerate(int $speed): void
    {
        $this->speed = $speed;
    }

    /**
     * @return void
     */
    public function stop(): void
    {
        $this->speed = 0;
    }
}