<?php

namespace App\TrafficLights\States\Common;

use App\TrafficLights\Systems\Common\ATrafficLight;

/**
 * Class AState
 * @package App\TrafficLights\States\Common
 */
abstract class AState
{
    /**
     * @var string State name
     */
    protected $state = '';

    /**
     * @var int Max occurrence of this state during day time
     */
    protected $maxDayCount = 0;

    /**
     * @var int Max occurrence of this state during night time
     */
    protected $maxNightCount = 0;

    /**
     * Returns the color of current state and transit to next state if required
     * @param ATrafficLight $TrafficLight
     * @return string
     */
    public function show(ATrafficLight $TrafficLight) : string
     {
         $TrafficLight->stateCount++;
         $this->transit($TrafficLight);

         return $this->state;
     }

    /**
     * Transit to next state if required
     * @param ATrafficLight $TrafficLight
     * @return void
     */
    abstract protected function transit(ATrafficLight $TrafficLight) : void;
}