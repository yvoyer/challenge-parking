<?php
/**
 * This file is part of the challenge project.
 * 
 * (c) Yannick Voyer (http://github.com/yvoyer)
 */

namespace Star\Service\Valet;

use Star\Vehicle\Vehicle;

/**
 * Class Valet
 *
 * @author  Yannick Voyer (http://github.com/yvoyer)
 *
 * @package Star\Service\Valet
 */
interface ParkingValet
{
    /**
     * @param Vehicle $vehicle
     *
     * @return bool
     */
    public function supportsVehicle(Vehicle $vehicle);

    /**
     * @param Vehicle $vehicle
     */
    public function park(Vehicle $vehicle);
}
 