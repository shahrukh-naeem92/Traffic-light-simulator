<?php

namespace App\TrafficLights\Systems\Common;

use App\TrafficLights\States\Common\AState;

/**
 * Class ATrafficLight
 * @package App\TrafficLights\Systems\Common
 */
abstract class ATrafficLight
{

    /**
     * @var int Occurrence count for current state
     */
    public $stateCount;

    /**
     * @var AState
     */
    public $state;

    /**
     * ATrafficLight constructor.
     * @param $state
     */
    public function __construct(AState $state)
    {
        $this->state = $state;
    }

    /**
     * Return color of current state
     * @return string
     */
    public function getStateAndTransit() : string
    {
        return $this->state->showStateAndTransit($this);
    }

    /**
     * Sets the state and restart the state counter
     * @param AState $state
     * @return void
     */
    public function setState(AState $state) : void
    {
        $this->stateCount = 0;
        $this->state = $state;
    }
}
