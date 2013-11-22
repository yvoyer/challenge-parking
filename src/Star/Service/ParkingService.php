<?php
/**
 * This file is part of the parking project.
 * 
 * (c) Yannick Voyer (http://github.com/yvoyer)
 */

namespace Star\Service;

use Star\Bike;
use Star\Car;
use Star\Plane;
use Star\PlaneCar;

/**
 * Class ParkingService
 *
 * @author  Yannick Voyer (http://github.com/yvoyer)
 *
 * @package Star\Service
 */
class ParkingService
{
    /**
     * Park the $vehicle.
     *
     * @param $vehicle
     */
    public function park($vehicle)
    {
        $vehicle->setSpeed(0);

        if ($vehicle instanceof Bike) {
            $vehicle->setIsLocked(true);
        } else if ($vehicle instanceof Car) {
            $vehicle->setTrunkLocked(true);
            $vehicle->setParkingBrakeEnabled(true);
        } else if ($vehicle instanceof PlaneCar) {
            $vehicle->setTrunkLocked(true);
            $vehicle->setFlapEnabled(true);
            $vehicle->setEngineStopped(true);
            $vehicle->setParkingBrakeEnabled(true);
        } else if ($vehicle instanceof Plane) {
            $vehicle->setFlapEnabled(true);
            $vehicle->setEngineStopped(true);
            $vehicle->setParkingBrakeEnabled(true);
        }
    }
}
 