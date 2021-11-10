<?php

class Car 
{
    public $brand;
    public $model;
    protected $mileage;

    public function __construct ($brand, $model, $mileage = 0)
    {
        $this->brand = $brand;
        $this->model = $model;                
        $this->mileage = $mileage;
    }

    public function drive ()
    {
        echo "$this->brand $this->model driving ($this->mileage).<br>";
    }

    public function getMileage ()
    {
        return $this->mileage;
    }

    public function addMileage ($mileage)
    {
        if ($mileage > 0 and is_numeric($mileage)) {
            $this->mileage += $mileage;
        } else {
            echo '<br>Ошибка! Пробег не добавлен<br>';
        }
    }
}