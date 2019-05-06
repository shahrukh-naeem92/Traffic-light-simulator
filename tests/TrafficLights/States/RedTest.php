<?php

namespace Tests\TrafficLights\States;

use PHPUnit\Framework\TestCase;
use App\TrafficLights\States\Red;
use App\TrafficLights\States\Green;
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
        $trafficLight = new DayTrafficLight(new Red());
        $trafficLight->stateCount = 0;
        $this->assertEquals('Red', $state->showStateAndTransit($trafficLight));
        $this->assertInstanceOf(Red::class, $trafficLight->state);
        $trafficLight->stateCount = $state->getMaxDayCount();
        $state->showStateAndTransit($trafficLight);
        $this->assertInstanceOf(Green::class, $trafficLight->state);
    }
}
