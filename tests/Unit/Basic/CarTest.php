<?php

namespace Basic;

use Demo\Basic\Car;
use Demo\Basic\Util;
use PHPUnit\Framework\TestCase;

/**
 * @covers Car
 * @covers Util
 */
class CarTest extends TestCase
{
    /**
     * @var Car
     */
    public $car;

    /**
     * Creator
     */
    public function setUp()
    {
        $this->car = new Car();
        $this->car->setMake('Mercedes');
        $this->car->setModel('C200');
        $this->car->setYear('2017');
        $this->car->setDistance(0);
        $this->car->setSpeed(0);

        parent::setUp();
    }

    /**
     * @test
     */
    public function info()
    {
        $this->assertEquals(
            'Car Info: 2017 Mercedes C200. Distance: 0 km. and traveling at 0kmph.',
            $this->car->getInfo()
        );
    }

    /**
     * @test
     */
    public function infoAfterTravelling()
    {
        $this->car->accelerate(125);
        $this->car->go(100);
        $this->car->go(50);

        $this->assertEquals(
            'Car Info: 2017 Mercedes C200. Distance: 150 km. and traveling at 125kmph.',
            $this->car->getInfo()
        );
    }

    /**
     * @test
     */
    public function washCarAfterTopSpeed()
    {
        $this->car->setDistance(0);
        $this->car->setSpeed(Util::$topSpeed);

        $this->assertEquals(
            'Car Info: 2017 Mercedes C200. Distance: 0 km. and traveling at 200kmph.',
            $this->car->getInfo()
        );

        $this->assertEquals(
            'Washing the car: Mercedes C200 of 2017',
            Util::washCar($this->car)
        );
    }
}