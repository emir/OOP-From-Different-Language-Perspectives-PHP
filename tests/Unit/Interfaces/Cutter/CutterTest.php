<?php

namespace Demo\Interfaces\Cutter;

use PHPUnit\Framework\TestCase;

/**
 * @covers CutterFactory
 */
class CutterTest extends TestCase
{
    /**
     * @test
     */
    public function is_actor_acting()
    {
        $actor = CutterFactory::create('actor');

        $this->assertEquals('I\'ve just stop acting!', $actor->cut());
    }

    /**
     * @test
     */
    public function barber_cut_stylish_hair()
    {
        $actor = CutterFactory::create('barber');

        $this->assertEquals('I\'m gonna cut your hair very stylish!', $actor->cut());
    }

    /**
     * @test
     */
    public function butcher_cutting_meat()
    {
        $actor = CutterFactory::create('butcher');

        $this->assertEquals('I\'ve just started cutting the meat!', $actor->cut());
    }
}