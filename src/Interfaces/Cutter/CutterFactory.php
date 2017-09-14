<?php

declare(strict_types=1);

namespace Demo\Interfaces\Cutter;

class CutterFactory
{
    /**
     * @param string $cutter
     * @return Actor|Barber|Butcher
     */
    public static function create(string $cutter)
    {
        /**
         * I don' follow that part from the original code because of more meaningful unit tests
         *
         * $i = random_int(0, 2);
         */

        switch ($cutter) {
            case 'actor':
                $cutter = new Actor();
                break;
            case 'barber':
                $cutter = new Barber();
                break;
            case 'butcher':
                $cutter = new Butcher();
                break;
            default:
                $cutter = new Butcher();
                break;
        }

        return $cutter;
    }
}