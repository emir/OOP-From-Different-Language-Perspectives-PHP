<?php

namespace Demo\Interfaces\Car;

use PHPUnit\Framework\TestCase;

/**
 * @covers Car
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
        $this->car = new Car('Mercedes', 'C200', '2017', 0, 0);

        parent::setUp();
    }

    /**
     * @test
     */
    public function IsVehicle()
    {
        $this->assertInstanceOf(Vehicle::class, $this->car);
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
}