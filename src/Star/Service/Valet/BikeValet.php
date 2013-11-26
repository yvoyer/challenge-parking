<?php
/**
 * This file is part of the challenge project.
 * 
 * (c) Yannick Voyer (http://github.com/yvoyer)
 */

namespace Star\Service\Valet;

use Star\Bike;
use Star\Vehicle\Vehicle;

/**
 * Class BikeValet
 *
 * @author  Yannick Voyer (http://github.com/yvoyer)
 *
 * @package Star\Service\Valet
 */
class BikeValet implements ParkingValet
{
    /**
     * @param Vehicle $Vehicle
     *
     * @return bool
     */
    public function supportsVehicle(Vehicle $Vehicle)
    {
        return $Vehicle instanceof Bike;
    }

    public function park(Vehicle $vehicle)
    {
        /**
         * @var $vehicle Bike
         */
        if ($this->supportsVehicle($vehicle)) {
            $vehicle->lock();
        }
    }
}
 