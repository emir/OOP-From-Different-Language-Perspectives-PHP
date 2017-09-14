<?php

declare(strict_types=1);

namespace Demo\Basic;

class Car
{
    /**
     * @var string
     */
    private $make;

    /**
     * @var string
     */
    private $model;

    /**
     * @var string
     */
    private $year;

    /**
     * @var int
     */
    private $speed;

    /**
     * @var int
     */
    private $distance;

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

    /**
     * @return string
     */
    public function getMake(): string
    {
        return $this->make;
    }

    /**
     * @param string $make
     */
    public function setMake(string $make)
    {
        $this->make = $make;
    }

    /**
     * @return string
     */
    public function getModel(): string
    {
        return $this->model;
    }

    /**
     * @param string $model
     */
    public function setModel(string $model)
    {
        $this->model = $model;
    }

    /**
     * @return string
     */
    public function getYear(): string
    {
        return $this->year;
    }

    /**
     * @param string $year
     */
    public function setYear(string $year)
    {
        $this->year = $year;
    }

    /**
     * @return int
     */
    public function getSpeed(): int
    {
        return $this->speed;
    }

    /**
     * @param int $speed
     */
    public function setSpeed(int $speed)
    {
        $this->speed = $speed;
    }

    /**
     * @return int
     */
    public function getDistance(): int
    {
        return $this->distance;
    }

    /**
     * @param int $distance
     */
    public function setDistance(int $distance)
    {
        $this->distance = $distance;
    }
}