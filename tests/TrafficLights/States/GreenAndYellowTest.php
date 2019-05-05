<?php

namespace Tests\TrafficLights\States;

use PHPUnit\Framework\TestCase;
use App\TrafficLights\States\GreenAndYellow;
use App\TrafficLights\Systems\DayTrafficLight;

/**
 * Class GreenAndYellowTest
 * @package Tests\TrafficLights\States
 */
class GreenAndYellowTest extends TestCase
{

    /**
     * @throws \Exception
     */
    public function testShow()
    {
        $state = new GreenAndYellow();
        $this->assertEquals('Green And Yellow', $state->show(new DayTrafficLight(new GreenAndYellow())));
    }
}