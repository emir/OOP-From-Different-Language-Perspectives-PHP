<?php

declare(strict_types=1);

namespace Demo\Interfaces\Cutter;

class Actor implements Cutter
{
    /**
     * @return string
     */
    public function cut(): string
    {
        return 'I\'ve just stop acting!';
    }
}