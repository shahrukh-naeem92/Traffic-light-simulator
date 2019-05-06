<?php

namespace Tests\TrafficLights\States;

use PHPUnit\Framework\TestCase;
use App\TrafficLights\States\Yellow;
use App\TrafficLights\States\Off;
use App\TrafficLights\Systems\NightTrafficLight;

/**
 * Class YellowTest
 * @package Tests\TrafficLights\States
 */
class YellowTest extends TestCase
{

    /**
     * @throws \Exception
     */
    public function testShow()
    {
        $state = new Yellow();
        $trafficLight = new NightTrafficLight(new Yellow());
        $trafficLight->stateCount = 0;
        $this->assertEquals('Yellow', $state->show($trafficLight));
        $this->assertInstanceOf(Yellow::class, $trafficLight->state);
        $trafficLight->stateCount = $state->getMaxDayCount();
        $state->show($trafficLight);
        $this->assertInstanceOf(Off::class, $trafficLight->state);
    }
}
