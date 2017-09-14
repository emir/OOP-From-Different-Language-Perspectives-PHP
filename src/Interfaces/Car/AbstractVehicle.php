<?php

declare(strict_types=1);

namespace Demo\Interfaces\Car;

abstract class AbstractVehicle implements Vehicle
{
    /**
     * @var string
     */
    protected $make;

    /**
     * @var string
     */
    protected $model;

    /**
     * @var string
     */
    protected $year;

    /**
     * @var int
     */
    protected $speed;

    /**
     * @var int
     */
    protected $distance;

    /**
     * AbstractVehicle constructor.
     * @param string $make
     * @param string $model
     * @param string $year
     * @param int $speed
     * @param int $distance
     */
    public function __construct(string $make, string $model, string $year, int $speed, int $distance)
    {
        $this->make = $make;
        $this->model = $model;
        $this->year = $year;
        $this->speed = $speed;
        $this->distance = $distance;
    }
}