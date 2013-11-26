<?php

use Behat\Behat\Context\ClosuredContextInterface,
    Behat\Behat\Context\TranslatedContextInterface,
    Behat\Behat\Context\BehatContext,
    Behat\Behat\Exception\PendingException;
use Behat\Gherkin\Node\PyStringNode,
    Behat\Gherkin\Node\TableNode;

require_once 'PHPUnit/Autoload.php';
require_once 'PHPUnit/Framework/Assert/Functions.php';

/**
 * Features context.
 */
class FeatureContext extends BehatContext
{
    /**
     * @var \Star\Service\ParkingService
     */
    private $service;

    /**
     * @var \Star\Car|\Star\Bike|\Star\Plane|\Star\PlaneCar
     */
    private $vehicle;

    /**
     * Initializes context.
     * Every scenario gets it's own context object.
     *
     * @param array $parameters context parameters (set them up through behat.yml)
     */
    public function __construct(array $parameters)
    {
    }

    /**
     * @Given /^I am a parking service$/
     */
    public function iAmAParkingService()
    {
        $this->service = new \Star\Service\ParkingService(new \Star\Service\Valet\SuperHandyValet());
    }

    /**
     * @When /^I receive a car$/
     */
    public function iReceiveACar()
    {
        $this->vehicle = new \Star\Car();
        assertSame(100, $this->vehicle->getSpeed());
        assertFalse($this->vehicle->parkingBrakeIsEnabled());
        assertFalse($this->vehicle->trunkIsLocked());
        $this->service->park($this->vehicle);
    }

    /**
     * @Given /^I should activate the parking brake$/
     */
    public function iShouldActivateTheParkingBrake()
    {
        assertTrue($this->vehicle->parkingBrakeIsEnabled());
    }

    /**
     * @When /^I receive a bike$/
     */
    public function iReceiveABike()
    {
        $this->vehicle = new \Star\Bike();
        assertSame(15, $this->vehicle->getSpeed());
        assertFalse($this->vehicle->isLocked());
        $this->service->park($this->vehicle);
    }

    /**
     * @Then /^I should lock the vehicle$/
     */
    public function iShouldLockTheVehicle()
    {
        assertTrue($this->vehicle->isLocked());
    }

    /**
     * @When /^I receive a plane$/
     */
    public function iReceiveAPlane()
    {
        $this->vehicle = new \Star\Plane();
        assertSame(300, $this->vehicle->getSpeed());
        assertFalse($this->vehicle->parkingBrakeIsEnabled());
        assertFalse($this->vehicle->engineIsStopped());
        assertFalse($this->vehicle->flapEnabled());
        $this->service->park($this->vehicle);
    }

    /**
     * @Given /^I should activate the flaps$/
     */
    public function iShouldActivateTheFlaps()
    {
        assertTrue($this->vehicle->flapEnabled());
    }

    /**
     * @When /^I receive a plane car$/
     */
    public function iReceiveAPlaneCar()
    {
        $this->vehicle = new \Star\PlaneCar();
        assertSame(150, $this->vehicle->getSpeed());
        assertFalse($this->vehicle->parkingBrakeIsEnabled());
        assertFalse($this->vehicle->engineIsStopped());
        assertFalse($this->vehicle->flapEnabled());
        assertFalse($this->vehicle->trunkIsLocked());
        $this->service->park($this->vehicle);
    }

    /**
     * @Then /^I should stop the engine$/
     */
    public function iShouldStopTheEngine()
    {
        assertTrue($this->vehicle->engineIsStopped());
    }

    /**
     * @Given /^The vehicle speed should be (\d+)$/
     */
    public function theVehicleSpeedShouldBe($expectedSpeed)
    {
        assertEquals($expectedSpeed, $this->vehicle->getSpeed());
    }

    /**
     * @Given /^I should lock the trunk$/
     */
    public function iShouldLockTheTrunk()
    {
        assertTrue($this->vehicle->trunkIsLocked());
    }
}
