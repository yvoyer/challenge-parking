<?php
/**
 * This file is part of the challenge project.
 * 
 * (c) Yannick Voyer (http://github.com/yvoyer)
 */

namespace Star\Service\Valet;

use Star\Vehicle\Vehicle;
use Star\Vehicle\ParkingBrakeEquippedVehicle;

/**
 * Class ParkingBrakeEquippedVehicleValet
 *
 * @author  Yannick Voyer (http://github.com/yvoyer)
 *
 * @package Star\Service\Valet
 */
class ParkingBrakeEquippedVehicleValet implements ParkingValet
{
    /**
     * @param Vehicle $vehicle
     *
     * @return bool
     */
    public function supportsVehicle(Vehicle $vehicle)
    {
        return $vehicle instanceof ParkingBrakeEquippedVehicle;
    }

    /**
     * @param Vehicle $vehicle
     */
    public function park(Vehicle $vehicle)
    {
        if ($this->supportsVehicle($vehicle)) {
            /**
             * @var $vehicle ParkingBrakeEquippedVehicle
             */
            $vehicle->applyParkingBrake();
        }
    }
}
 