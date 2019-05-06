<?php

namespace App\TrafficLights\States;

use App\TrafficLights\States\Common\AState;
use App\TrafficLights\Systems\NightTrafficLight;
use App\TrafficLights\Systems\Common\ATrafficLight;

/**
 * Class Off
 * @package App\TrafficLights\States
 */
class Off extends AState
{

    /**
     * @var string State name
     */
    protected $state = 'Off';

    /**
     * @var int Max occurrence of this state during day time
     */
    protected $maxDayCount = 0;

    /**
     * @var int Max occurrence of this state during night time
     */
    protected $maxNightCount = 2;

    /**
     * Transit to next state if required
     * @param ATrafficLight $TrafficLight
     * @return void
     */
    protected function transit(ATrafficLight $TrafficLight) : void
    {
        if ($TrafficLight instanceof NightTrafficLight && $TrafficLight->stateCount >= $this->maxNightCount) {
            $TrafficLight->setState(new Yellow);
        }
    }
}
