<?php
/**
 * This file is part of the challenge project.
 * 
 * (c) Yannick Voyer (http://github.com/yvoyer)
 */

namespace Star\Service\Valet;

use Star\Vehicle\Vehicle;

/**
 * Class SuperHandyValet
 *
 * Implementation of a super mega handy ParkingValet
 *
 * @author  Yannick Voyer (http://github.com/yvoyer)
 *
 * @package Star\Service\Valet
 */
class SuperHandyValet implements ParkingValet
{
    /**
     * @var ParkingValet[]
     */
    private $valets;

    public function __construct()
    {
        $this->valets = array(
            new BikeValet(),
            new AirborneVehicleValet(),
            new VehicleValet(),
            new ParkingBrakeEquippedVehicleValet(),
            new TrunkAwareValet(),
        );
    }

    /**
     * @param Vehicle $vehicle
     *
     * @return bool
     */
    public function supportsVehicle(Vehicle $vehicle)
    {
        return true;
    }

    /**
     * @param Vehicle $vehicle
     */
    public function park(Vehicle $vehicle)
    {
        foreach ($this->valets as $valet) {
            if ($valet->supportsVehicle($vehicle)) {
                $valet->park($vehicle);
            }
        }
    }
}
 