<?php
/**
 * This file is part of the challenge project.
 * 
 * (c) Yannick Voyer (http://github.com/yvoyer)
 */

namespace Star\Vehicle;

use Star\Requirement;

/**
 * Class Vehicle
 *
 * @author  Yannick Voyer (http://github.com/yvoyer)
 *
 * @package Star\Vehicle
 */
abstract class Vehicle extends Requirement
{
    /**
     * @var int
     */
    protected $speed;

    /**
     * Set the speed.
     *
     * @param int $speed
     */
    public function move($speed)
    {
        $this->speed = $speed;
    }

    /**
     * Stop the vehicle.
     */
    public function stop()
    {
        $this->speed = 0;
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
 