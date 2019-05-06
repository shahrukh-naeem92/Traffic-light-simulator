<?php

namespace Tests\TrafficLights\States;

use PHPUnit\Framework\TestCase;
use App\TrafficLights\States\GreenAndYellow;
use App\TrafficLights\Systems\DayTrafficLight;
use App\TrafficLights\States\Red;

/**
 * Class GreenAndYellowTest
 * @package Tests\TrafficLights\States
 */
class GreenAndYellowTest extends TestCase
{

    /**
     * @throws \Exception
     * @return void
     */
    public function testShow() : void
    {
        $state = new GreenAndYellow();
        $trafficLight = new DayTrafficLight(new GreenAndYellow());
        $trafficLight->stateCount = 0;
        $this->assertEquals('Green And Yellow', $state->show($trafficLight));
        $this->assertInstanceOf(GreenAndYellow::class, $trafficLight->state);
        $trafficLight->stateCount = $state->getMaxDayCount();
        $state->show($trafficLight);
        $this->assertInstanceOf(Red::class, $trafficLight->state);
    }
}
