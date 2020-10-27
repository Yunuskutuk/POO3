<?php

require_once 'HighWay.php';
require_once 'Vehicle.php';

final class MotorWay extends HighWay
{
    /**
     * @var integer
     */
    protected $nbLane=4;
    /**
     * @var integer
     */
    protected $maxSpeed=130;

    public function addVehicle($vehicle)
    {
        if ($vehicle instanceof Car || $vehicle instanceof Truck) //tout type de voiture
        {
            $this->currentvehicles[] = $vehicle;
        }
    }
}