<?php
/**
 * This file is part of the challenge project.
 * 
 * (c) Yannick Voyer (http://github.com/yvoyer)
 */

namespace Star\Service\Valet;

use Star\Vehicle\Vehicle;

/**
 * Class MotorVehicleValet
 *
 * @author  Yannick Voyer (http://github.com/yvoyer)
 *
 * @package Star\Service\Valet
 */
class VehicleValet implements ParkingValet
{
    /**
     * @param Vehicle $Vehicle
     *
     * @return bool
     */
    public function supportsVehicle(Vehicle $Vehicle)
    {
        return true;
    }

    /**
     * @param Vehicle $vehicle
     */
    public function park(Vehicle $vehicle)
    {
        $vehicle->stop();
    }
}
 