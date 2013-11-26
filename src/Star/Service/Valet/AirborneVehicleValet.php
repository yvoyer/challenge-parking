<?php
/**
 * This file is part of the challenge project.
 * 
 * (c) Yannick Voyer (http://github.com/yvoyer)
 */

namespace Star\Service\Valet;

use Star\Vehicle\AirbornVehicle;
use Star\Vehicle\Vehicle;

/**
 * Class PlaneValet
 *
 * @author  Yannick Voyer (http://github.com/yvoyer)
 *
 * @package Star\Service\Valet
 */
class AirborneVehicleValet implements ParkingValet
{
    /**
     * @param Vehicle $vehicle
     *
     * @return bool
     */
    public function supportsVehicle(Vehicle $vehicle)
    {
        return $vehicle instanceof AirbornVehicle;
    }

    /**
     * @param Vehicle $vehicle
     */
    public function park(Vehicle $vehicle)
    {
        /**
         * @var $vehicle AirbornVehicle
         */
        if ($this->supportsVehicle($vehicle)) {
            $vehicle->stopEngine(true);
            $vehicle->enableFlaps(true);
        }
    }
}
 