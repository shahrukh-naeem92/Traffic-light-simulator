<?php

namespace Tests\TrafficLights;

use App\TrafficLights\TrafficLightController;
use PHPUnit\Framework\TestCase;
use App\TrafficLights\Systems\Common\ATrafficLight;
use App\TrafficLights\States\Green;
use App\TrafficLights\States\Yellow;
use App\TrafficLights\Systems\DayTrafficLight;
use App\TrafficLights\Systems\NightTrafficLight;

/**
 * Class TrafficLightControllerTest
 * @package Tests\TrafficLights
 */
class TrafficLightControllerTest extends TestCase
{
    /**
     * @throws \Exception
     * @return void
     */
    public function testGetTrafficLight() : void
    {
        $controller = new TrafficLightController();

        $this->assertInstanceOf(ATrafficLight::class, $controller->getTrafficLight());
    }

    /**
     * @param ATrafficLight $mock
     * @param string $expexted
     * @throws \Exception
     * @dataProvider getStateProvider
     * @return void
     */
    public function testGetState(ATrafficLight $trafficLight, string $expected)
    {
        $controller = $this->getMockBuilder(TrafficLightController::class)
            ->setMethods(['getTrafficLight'])
            ->getMock();
        $controller->method('getTrafficLight')
            ->willReturn($trafficLight);
        $this->assertEquals($controller->getState(), $expected);
    }

    /**
     * @return array
     */
    public function getStateProvider() : array
    {
        return [
            [
                new DayTrafficLight(new Green()),
                'Green'
            ],
            [
                new NightTrafficLight(new Yellow()),
                'Yellow'
            ]
        ];
    }

}