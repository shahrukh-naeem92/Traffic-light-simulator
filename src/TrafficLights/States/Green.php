<?php

namespace App\TrafficLights\States;

use App\TrafficLights\Systems\DayTrafficLight;
use App\TrafficLights\Systems\Common\ATrafficLight;
use App\TrafficLights\States\Common\AState;

/**
 * Class Green
 * @package App\TrafficLights\States
 */class Green extends AState
{

    /**
     * @var string State name
     */
    protected $state = 'Green';

    /**
     * @var int Max occurrence of this state during day time
     */
    protected $maxDayCount = 30;

    /**
     * @var int Max occurrence of this state during night time
     */
    protected $maxNightCount = 0;

    /**
     * Transit to next state if required
     * @param ATrafficLight $TrafficLight
     */
    protected function transit(ATrafficLight $TrafficLight) : void
    {
        if ($TrafficLight instanceof DayTrafficLight && $TrafficLight->stateCount == $this->maxDayCount) {
            $TrafficLight->setState(new GreenAndYellow());
        }
    }
}