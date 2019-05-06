<?php

namespace Tests\TrafficLights\States;

use PHPUnit\Framework\TestCase;
use App\TrafficLights\States\Green;
use App\TrafficLights\Systems\DayTrafficLight;
use App\TrafficLights\States\GreenAndYellow;

/**
 * Class GreenTest
 * @package Tests\TrafficLights\States
 */
class GreenTest extends TestCase
{

    /**
     * @throws \Exception
     */
    public function testShow()
    {
        $state = new Green();
        $trafficLight = new DayTrafficLight(new Green());
        $trafficLight->stateCount = 0;
        $this->assertEquals('Green', $state->showStateAndTransit($trafficLight));
        $this->assertInstanceOf(Green::class, $trafficLight->state);
        $trafficLight->stateCount = $state->getMaxDayCount();
        $state->showStateAndTransit($trafficLight);
        $this->assertInstanceOf(GreenAndYellow::class, $trafficLight->state);
    }
}
