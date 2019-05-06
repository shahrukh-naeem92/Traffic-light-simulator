<?php

namespace App\TrafficLights;

use App\TrafficLights\States\Green;
use App\TrafficLights\States\Yellow;
use App\TrafficLights\Systems\Common\ATrafficLight;
use App\TrafficLights\Systems\DayTrafficLight;
use App\TrafficLights\Systems\NightTrafficLight;

/**
 * Class TrafficLightController
 * @package App\TrafficLights
 */
class TrafficLightController
{
    /**
     * @var ATrafficLight
     */
    public $trafficLight;

    /**
     * Returns specific traffic light according to the current time
     *
     * @return ATrafficLight
     */
    public function getTrafficLight() : ATrafficLight
    {
        if (time() >= strtotime("06:00:00") && time() <= strtotime("23:00:00")) {
            $this->trafficLight = empty($this->trafficLight) ? new DayTrafficLight(new Green()) : $this->trafficLight;
        } else {
            $this->trafficLight = empty($this->trafficLight) ?
                new NightTrafficLight(new Yellow()) :
                $this->trafficLight;
        }

        return $this->trafficLight;
    }

    /**
     * Returns current state of traffic light in string format.
     *
     * @return string
     */
    public function getState() : string
    {
        return $this->getTrafficLight()->getState();
    }
}
