<?php
/**
 * This file is part of the parking project.
 *
 * (c) Yannick Voyer (http://github.com/yvoyer)
 */

namespace Star\Service;

use Star\Requirement;
use Star\Service\Valet\ParkingValet;

/**
 * Class ParkingService
 *
 * @author  Yannick Voyer (http://github.com/yvoyer)
 *
 * @package Star\Service
 */
class ParkingService
{
    /**
     * @var ParkingValet
     */
    private $valet;

    /**
     * @param ParkingValet $valet
     */
    public function __construct(ParkingValet $valet)
    {
        $this->valet = $valet;
    }

    /**
     * Park the $vehicle.
     *
     * @param Requirement $vehicle
     */
    public function park($vehicle)
    {
        $vehicle->validateRequirements();
        $this->valet->park($vehicle);
    }
}
