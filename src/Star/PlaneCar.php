<?php
/**
 * This file is part of the parking project.
 * 
 * (c) Yannick Voyer (http://github.com/yvoyer)
 */

namespace Star;

/**
 * Class PlaneCar
 *
 * @author  Yannick Voyer (http://github.com/yvoyer)
 *
 * @package Star
 */
class PlaneCar
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

    /**
     * @var int
     */
    private $speed = 150;

    /**
     * @var bool
     */
    private $trunkLocked = false;

    /**
     * Set whether the trunk is locked.
     *
     * @param boolean $trunkLocked
     */
    public function setTrunkLocked($trunkLocked)
    {
        $this->trunkLocked = $trunkLocked;
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
     *
     * @param boolean $parkingBrakeEnabled
     */
    public function setParkingBrakeEnabled($parkingBrakeEnabled)
    {
        $this->parkingBrakeEnabled = $parkingBrakeEnabled;
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
     * Set the speed.
     *
     * @param int $speed
     */
    public function setSpeed($speed)
    {
        $this->speed = $speed;
    }

    /**
     * Returns the Speed.
     *
     * @return int
     */
    public function getSpeed()
    {
        return $this->speed;
    }

    /**
     * Set the flapEnabled flag.
     *
     * @param boolean $flapEnabled
     */
    public function setFlapEnabled($flapEnabled)
    {
        $this->flapEnabled = $flapEnabled;
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
     *
     * @param boolean $engineStopped
     */
    public function setEngineStopped($engineStopped)
    {
        $this->engineStopped = $engineStopped;
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
}
 