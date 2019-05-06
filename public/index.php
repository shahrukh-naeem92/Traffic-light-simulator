<?php

require '../vendor/autoload.php';

use App\TrafficLights\TrafficLightController;

$controller = new TrafficLightController();
while (true) {
    echo $controller->getState();
    echo PHP_EOL;
    sleep(1);
}
