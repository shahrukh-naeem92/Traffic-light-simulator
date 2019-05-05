<?php

namespace Tests\TrafficLights\States;

use PHPUnit\Framework\TestCase;
use App\TrafficLights\States\Green;
use App\TrafficLights\Systems\DayTrafficLight;

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
        $this->assertEquals('Green', $state->show(new DayTrafficLight(new Green())));
    }
}