<?php

namespace App\TrafficLights\States;

use App\TrafficLights\States\Common\AState;
use App\TrafficLights\Systems\NightTrafficLight;
use App\TrafficLights\Systems\Common\ATrafficLight;

/**
 * Class Yellow
 * @package App\TrafficLights\States
 */
class Yellow extends AState
{

    /**
     * @var string State name
     */
    protected $state = 'Yellow';

    /**
     * @var int Max occurrence of this state during day time
     */
    protected $maxDayCount = 0;

    /**
     * @var int Max occurrence of this state during night time
     */
    protected $maxNightCount = 1;

    /**
     * Transit to next state if required
     * @param ATrafficLight $TrafficLight
     * @return void
     */
    protected function transit(ATrafficLight $TrafficLight) : void
    {
        if ($TrafficLight instanceof NightTrafficLight && $TrafficLight->stateCount == $this->maxNightCount) {
            $TrafficLight->setState(new Off());
        }
    }
}