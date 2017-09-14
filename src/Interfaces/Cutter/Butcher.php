<?php

declare(strict_types=1);

namespace Demo\Interfaces\Cutter;

class Butcher implements Cutter
{
    /**
     * @return string
     */
    public function cut(): string
    {
        return 'I\'ve just started cutting the meat!';
    }
}