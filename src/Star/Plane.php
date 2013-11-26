<?php
/**
 * This file is part of the parking project.
 *
 * (c) Yannick Voyer (http://github.com/yvoyer)
 */

namespace Star;

use Star\Vehicle\AirbornVehicle;
use Star\Vehicle\Vehicle;

/**
 * Class Plane
 *
 * @author  Yannick Voyer (http://github.com/yvoyer)
 *
 * @package Star
 */
class Plane extends Vehicle implements AirbornVehicle
{
    /**
     * @var bool
     */
    private $engineStopped = false;

    /**
     * @var bool
     */
    private $flapEnabled = false;

    /**
     * @var bool
     */
    private $parkingBrakeEnabled = false;

    public function __construct()
    {
        $this->move(300);
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
     * Set the flapEnabled flag.
     */
    public function enableFlaps()
    {
        $this->flapEnabled = true;
    }

    /**
     * Returns whether the flaps are enabled.
     *
     * @return boolean
     */
    public function flapEnabled()
    {
        return $this->flapEnabled;
    }

    /**
     * Set whether the engine is stopped.
     */
    public function startEngine()
    {
        $this->engineStopped = false;
    }

    /**
     * Set whether the engine is stopped.
     */
    public function stopEngine()
    {
        $this->engineStopped = true;
    }

    /**
     * Returns whether the engine is stopped.
     *
     * @return boolean
     */
    public function engineIsStopped()
    {
        return $this->engineStopped;
    }

    /**
     * @return array
     */
    protected function getRequirements()
    {
        return array('engineIsStopped', 'flapEnabled', 'parkingBrakeIsEnabled', 'getSpeed');
    }
}
