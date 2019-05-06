<?php

namespace Tests\TrafficLights\States;

use PHPUnit\Framework\TestCase;
use App\TrafficLights\States\Off;
use App\TrafficLights\Systems\NightTrafficLight;
use App\TrafficLights\States\Yellow;

/**
 * Class OffTest
 * @package Tests\TrafficLights\States
 */
class OffTest extends TestCase
{

    /**
     * @throws \Exception
     */
    public function testShow()
    {
        $state = new Off();
        $trafficLight = new NightTrafficLight(new Off());
        $trafficLight->stateCount = 0;
        $this->assertEquals('Off', $state->showStateAndTransit($trafficLight));
        $this->assertInstanceOf(Off::class, $trafficLight->state);
        $trafficLight->stateCount = $state->getMaxNightCount();
        $state->showStateAndTransit($trafficLight);
        $this->assertInstanceOf(Yellow::class, $trafficLight->state);
    }
}
