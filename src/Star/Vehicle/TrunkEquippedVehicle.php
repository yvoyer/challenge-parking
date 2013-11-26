<?php
/**
 * This file is part of the challenge project.
 * 
 * (c) Yannick Voyer (http://github.com/yvoyer)
 */

namespace Star\Vehicle;

/**
 * Class TrunkEquippedVehicle
 *
 * @author  Yannick Voyer (http://github.com/yvoyer)
 *
 * @package Star\Vehicle
 */
interface TrunkEquippedVehicle
{
    /**
     * Set whether the trunk is locked.
     */
    public function lockTrunk();

    public function unlockTrunk();

    /**
     * Returns whether the trunk is locked.
     *
     * @return boolean
     */
    public function trunkIsLocked();
}
 