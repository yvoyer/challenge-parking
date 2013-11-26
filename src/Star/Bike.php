<?php
/**
 * This file is part of the parking project.
 *
 * (c) Yannick Voyer (http://github.com/yvoyer)
 */

namespace Star;

use Star\Vehicle\Vehicle;

/**
 * Class Bike
 *
 * @author  Yannick Voyer (http://github.com/yvoyer)
 *
 * @package Star
 */
class Bike extends Vehicle
{
    /**
     * @var bool
     */
    private $isLocked = false;

    public function __construct()
    {
        $this->move(15);
        $this->unlock();
    }

    /**
     * Set whether the bike is locked.
     */
    public function lock()
    {
        $this->isLocked = true;
    }

    /**
     * Set whether the bike is locked.
     */
    public function unlock()
    {
        $this->isLocked = false;
    }

    /**
     * Returns whether the bike is locked.
     *
     * @return boolean
     */
    public function isLocked()
    {
        return $this->isLocked;
    }

    /**
     * @return array
     */
    protected function getRequirements()
    {
        return array('getSpeed', 'isLocked');
    }
}
