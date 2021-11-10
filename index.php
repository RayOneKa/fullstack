<?php

require_once 'car.php';

class ElectroCar extends Car
{
    public function __construct($brand, $model, $mileage = 0)
    {
        parent::__construct($brand, $model, $mileage);
    }

    public function showMileage () {
        echo $this->mileage;
    }

    public function drive ()
    {
        echo "Electro car $this->brand $this->model driving ($this->mileage).<br>";
    }
}

$audi = new Car('Audi', 'Q5');
$audi->drive();

$vesta = new Car('Lada', 'Vesta', 40000);
$vesta->drive();

$audi->addMileage(5000);
$audi->drive();
$vesta->addMileage(-5000);
$vesta->drive();

echo $vesta->getMileage();
echo '<br>';

$tesla = new ElectroCar('Tesla', 'Model S');
echo $tesla->brand;
echo '<br>';

$tesla->drive();
$tesla->showMileage();