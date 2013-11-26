<?php
/**
 * This file is part of the challenge project.
 * 
 * (c) Yannick Voyer (http://github.com/yvoyer)
 */

namespace Star\Vehicle;

/**
 * Class AirbornVehicle
 *
 * @author  Yannick Voyer (http://github.com/yvoyer)
 *
 * @package Star\Vehicle
 */
interface AirbornVehicle extends ParkingBrakeEquippedVehicle
{
    /**
     * Set the flapEnabled flag.
     */
    public function enableFlaps();

    /**
     * Returns whether the flaps are enabled.
     *
     * @return boolean
     */
    public function flapEnabled();

    /**
     * Set whether the engine is stopped.
     */
    public function stopEngine();

    /**
     * Set whether the engine is stopped.
     */
    public function startEngine();

    /**
     * Returns whether the engine is stopped.
     *
     * @return boolean
     */
    public function engineIsStopped();
}
 