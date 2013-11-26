<?php
/**
 * This file is part of the parking project.
 *
 * (c) Yannick Voyer (http://github.com/yvoyer)
 */

namespace Star;

use Star\Vehicle\ParkingBrakeEquippedVehicle;
use Star\Vehicle\TrunkEquippedVehicle;
use Star\Vehicle\Vehicle;

/**
 * Class Car
 *
 * @author  Yannick Voyer (http://github.com/yvoyer)
 *
 * @package Star
 */
class Car extends Vehicle implements ParkingBrakeEquippedVehicle, TrunkEquippedVehicle
{
    /**
     * @var bool
     */
    private $trunkLocked = false;

    /**
     * @var bool
     */
    private $parkingBrakeEnabled = false;

    public function __construct()
    {
        $this->move(100);
    }

    /**
     * Set whether the trunk is locked.
     */
    public function lockTrunk()
    {
        $this->trunkLocked = true;
    }

    public function unlockTrunk()
    {
        $this->trunkLocked = false;
    }

    /**
     * Returns whether the trunk is locked.
     *
     * @return boolean
     */
    public function trunkIsLocked()
    {
        return $this->trunkLocked;
    }

    /**
     * Set whether the parking brake is enabled.
     */
    public function applyParkingBrake()
    {
        $this->parkingBrakeEnabled = true;
    }

    /**
     * Set whether the parking brake is enabled.
     */
    public function releaseParkingBrake()
    {
        $this->parkingBrakeEnabled = false;
    }

    /**
     * Returns whether the parking brake is enabled.
     *
     * @return boolean
     */
    public function parkingBrakeIsEnabled()
    {
        return $this->parkingBrakeEnabled;
    }

    /**
     * @return array
     */
    protected function getRequirements()
    {
        return array('getSpeed', 'parkingBrakeIsEnabled', 'trunkIsLocked');
    }
}
