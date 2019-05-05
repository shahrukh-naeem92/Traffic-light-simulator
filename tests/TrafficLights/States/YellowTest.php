<?php

namespace Tests\TrafficLights\States;

use PHPUnit\Framework\TestCase;
use App\TrafficLights\States\Yellow;
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
        $this->assertEquals('Yellow', $state->show(new NightTrafficLight(new Yellow())));
    }
}