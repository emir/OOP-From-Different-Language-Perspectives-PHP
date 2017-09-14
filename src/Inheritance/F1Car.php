<?php

declare(strict_types=1);

namespace Demo\Inheritance;

use Demo\Basic\Car;

class F1Car extends Car
{
    /**
     * @var string
     */
    private $pilot;

    /**
     * @param int $speed
     * @return void
     */
    public function accelerate(int $speed): void
    {
        $this->setSpeed($speed);

        echo 'Faster acceleration!';
    }

    /**
     * @return string
     */
    public function getInfo(): string
    {
        return parent::getInfo() . ' Pilot is ' . $this->getPilot();
    }

    /**
     * @return string
     */
    public function getPilot(): string
    {
        return $this->pilot;
    }

    /**
     * @param string $pilot
     */
    public function setPilot(string $pilot)
    {
        $this->pilot = $pilot;
    }
}