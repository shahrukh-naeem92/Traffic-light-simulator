<?php

namespace Tests\TrafficLights\States;

use PHPUnit\Framework\TestCase;
use App\TrafficLights\States\Off;
use App\TrafficLights\Systems\NightTrafficLight;

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
        $this->assertEquals('Off', $state->show(new NightTrafficLight(new Off())));
    }
}