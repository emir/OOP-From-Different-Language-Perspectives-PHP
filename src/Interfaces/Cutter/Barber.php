<?php

declare(strict_types=1);

namespace Demo\Interfaces\Cutter;

class Barber implements Cutter
{
    /**
     * @return string
     */
    public function cut(): string
    {
        return 'I\'m gonna cut your hair very stylish!';
    }
}