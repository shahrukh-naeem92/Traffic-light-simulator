<?php

namespace Tests\TrafficLights\States;

use PHPUnit\Framework\TestCase;
use App\TrafficLights\States\Red;
use App\TrafficLights\Systems\DayTrafficLight;

/**
 * Class RedTest
 * @package Tests\TrafficLights\States
 */
class RedTest extends TestCase
{

    /**
     * @throws \Exception
     */
    public function testShow()
    {
        $state = new Red();
        $this->assertEquals('Red', $state->show(new DayTrafficLight(new Red())));
    }
}