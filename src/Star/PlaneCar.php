<?php
/**
 * This file is part of the parking project.
 *
 * (c) Yannick Voyer (http://github.com/yvoyer)
 */

namespace Star;

use Star\Vehicle\ParkingBrakeEquippedVehicle;
use Star\Vehicle\TrunkEquippedVehicle;

/**
 * Class PlaneCar
 *
 * @author  Yannick Voyer (http://github.com/yvoyer)
 *
 * @package Star
 */
class PlaneCar extends Plane implements ParkingBrakeEquippedVehicle, TrunkEquippedVehicle
{
    /**
     * @var bool
     */
    private $trunkLocked = false;

    public function __construct()
    {
        $this->move(150);
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
     * @return array
     */
    protected function getRequirements()
    {
        return array('engineIsStopped', 'flapEnabled', 'getSpeed', 'parkingBrakeIsEnabled', 'trunkIsLocked');
    }
}
