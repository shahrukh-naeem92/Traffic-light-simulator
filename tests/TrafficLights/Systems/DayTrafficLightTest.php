<?php

namespace Tests\TrafficLights\Systems;

use App\TrafficLights\States\Common\AState;
use App\TrafficLights\Systems\DayTrafficLight;
use App\TrafficLights\States\Red;
use App\TrafficLights\States\Green;
use PHPUnit\Framework\TestCase;

/**
 * Class DayTrafficLightTest
 * @package Tests\TrafficLights\Systems
 */
class DayTrafficLightTest extends TestCase
{

    /**
     * @param AState $state
     * @param string $expected
     * @throws \Exception
     * @return void
     * @dataProvider getStateProvider
     */
    public function testGetState(AState $state, string $expected) : void
    {
        $trafficLight = new DayTrafficLight($state);
        $this->assertEquals($expected, $trafficLight->getStateAndTransit());
    }

    /**
     * @param AState $state
     * @throws \Exception
     * @return void
     * @dataProvider setStateProvider
     */
    public function testSetState(AState $state) : void
    {
        $trafficLight = new DayTrafficLight($state);
        $trafficLight->setState($state);
        $this->assertInstanceOf(get_class($state), $trafficLight->state);
    }

    /**
     * @return array
     */
    public function getStateProvider() : array
    {
        return [
            [
                new Red(),
                'Red'
            ],
            [
                new Green(),
                'Green'
            ]
        ];
    }

    /**
     * @return array
     */
    public function setStateProvider() : array
    {
        return [
            [
                new Red()
            ],
            [
                new Green()
            ]
        ];
    }
}
