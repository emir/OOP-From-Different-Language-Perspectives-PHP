<?php

namespace Basic;

use Demo\Inheritance\F1Car;
use PHPUnit\Framework\TestCase;

/**
 * @covers Car
 * @covers Util
 */
class F1CarTest extends TestCase
{
    /**
     * @test
     */
    public function info()
    {
        $car = new F1Car();
        $car->setMake('Mercedes');
        $car->setModel('C200');
        $car->setYear('2017');
        $car->setDistance(20000);
        $car->setSpeed(310);
        $car->setPilot('Emir');
        
        $this->assertEquals(
            'Car Info: 2017 Mercedes C200. Distance: 20000 km. and traveling at 310kmph. Pilot is Emir',
            $car->getInfo()
        );
    }
}