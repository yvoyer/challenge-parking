<?php
/**
 * This file is part of the challenge project.
 * 
 * (c) Yannick Voyer (http://github.com/yvoyer)
 */

namespace Star\Service\Valet;

use Star\Vehicle\TrunkEquippedVehicle;
use Star\Vehicle\Vehicle;

/**
 * Class TrunkAwareValet
 *
 * @author  Yannick Voyer (http://github.com/yvoyer)
 *
 * @package Star\Service\Valet
 */
class TrunkAwareValet implements ParkingValet
{
    /**
     * @param Vehicle $vehicle
     *
     * @return bool
     */
    public function supportsVehicle(Vehicle $vehicle)
    {
        return $vehicle instanceof TrunkEquippedVehicle;
    }

    /**
     * @param Vehicle $vehicle
     */
    public function park(Vehicle $vehicle)
    {
        if ($this->supportsVehicle($vehicle)) {
            /**
             * @var $vehicle TrunkEquippedVehicle
             */
            $vehicle->lockTrunk();
        }
    }
}
 