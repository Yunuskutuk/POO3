<?php

require_once 'HighWay.php';

final class PedestrianWay extends HighWay
{
    /**
 * @var integer
 */
    protected $nbLane=1;
    /**
     * @var integer
     */
    protected $maxSpeed=10;

    public function addVehicle($vehicle)
    {
        if ($vehicle instanceof Skate || $vehicle instanceof Bike)
            $this->currentvehicles[] = $vehicle;
    }
}