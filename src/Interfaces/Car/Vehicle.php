<?php

declare(strict_types=1);

namespace Demo\Interfaces\Car;

interface Vehicle
{
    /**
     * @return string
     */
    public function getInfo(): string;

    /**
     * @param int $distance
     * @return void
     */
    public function go(int $distance): void;

    /**
     * @param int $speed
     * @return void
     */
    public function accelerate(int $speed): void;

    /**
     * @return void
     */
    public function stop(): void;
}