<?php
/**
 * This file is part of the parking project.
 *
 * (c) Yannick Voyer (http://github.com/yvoyer)
 */

namespace Star;

/**
 * Class Requirement
 *
 * @package Star
 * @author  Yannick Voyer (http://github.com/yvoyer)
 *
 * This class should not be changed
 */
abstract class Requirement
{
    /**
     * @return array
     */
    protected abstract function getRequirements();

    public function validateRequirements()
    {
        $diff = array_diff($this->getRequirements(), get_class_methods($this));

        if (false === empty($diff)) {
            throw new \Exception('You do not respect the requirements');

        }
    }
}
