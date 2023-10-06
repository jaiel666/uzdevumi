<?php

class FuelGauge
{
    private $fuel;

    public function __construct()
    {
        $this->fuel = 0;
    }

    public function getFuel()
    {
        return $this->fuel;
    }

    public function incrementFuel()
    {
        if ($this->fuel < 70) {
            $this->fuel++;
        }
    }

    public function decrementFuel()
    {
        if ($this->fuel > 0) {
            $this->fuel--;
        }
    }
}

class Odometer
{
    private $mileage;
    private $fuelGauge;

    public function __construct(FuelGauge $fuelGauge)
    {
        $this->mileage = 0;
        $this->fuelGauge = $fuelGauge;
    }

    public function getMileage()
    {
        return $this->mileage;
    }

    public function incrementMileage()
    {
        $this->mileage++;
        if ($this->mileage > 999999) {
            $this->mileage = 0;
        }
        if ($this->mileage % 10 === 0) {
            $this->fuelGauge->decrementFuel();
        }
    }
}


$fuelGauge = new FuelGauge();
$odometer = new Odometer($fuelGauge);

echo "Enter fuel amount from 0 to 70 liters: ";
$initialFuel = (int)readline();

if ($initialFuel >= 0 && $initialFuel <= 70) {
    for ($i = 0; $i < $initialFuel; $i++) {
        $fuelGauge->incrementFuel();
    }
    while ($fuelGauge->getFuel() > 0) {
        $odometer->incrementMileage();
        echo "Mileage: " . $odometer->getMileage() . " km\n";
        echo "Fuel: " . $fuelGauge->getFuel() . " liters\n";
        echo "------------------------\n";
    }

    echo "The car is out of fuel\n";
} else {
    echo "Invalid initial fuel amount\n";
}
