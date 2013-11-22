<?php
/**
 * This file is part of the parking project.
 * 
 * (c) Yannick Voyer (http://github.com/yvoyer)
 */

namespace Star;

/**
 * Class Bike
 *
 * @author  Yannick Voyer (http://github.com/yvoyer)
 *
 * @package Star
 */
class Bike
{
    /**
     * @var bool
     */
    private $isLocked = false;

    /**
     * @var int
     */
    private $speed = 15;

    /**
     * Set whether the bike is locked.
     *
     * @param boolean $isLocked
     */
    public function setIsLocked($isLocked)
    {
        $this->isLocked = $isLocked;
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
}
 