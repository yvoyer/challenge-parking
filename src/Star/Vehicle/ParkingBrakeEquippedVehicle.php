<?php
/**
 * This file is part of the challenge project.
 * 
 * (c) Yannick Voyer (http://github.com/yvoyer)
 */

namespace Star\Vehicle;

/**
 * Class VehicleWithParkingBrake
 *
 * @author  Yannick Voyer (http://github.com/yvoyer)
 *
 * @package Star\Vehicle
 */
interface ParkingBrakeEquippedVehicle
{
    /**
     * Set whether the parking brake is enabled.
     */
    public function applyParkingBrake();

    /**
     * Set whether the parking brake is enabled.
     */
    public function releaseParkingBrake();

    /**
     * Returns whether the parking brake is enabled.
     *
     * @return boolean
     */
    public function parkingBrakeIsEnabled();
}
 