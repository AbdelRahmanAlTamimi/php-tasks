<?php

class Car {
    private $make;
    private $model;
    protected $VIN;

    function __construct($make,$model,$VIN)
    {
       $this->make = $make;
       $this->model = $model;
       $this->VIN = $VIN;
    }
    function __destruct()
    {
        echo "End of life of the car ^ <> ^ <br>";
    }

    function setMake($make) {
        $this->make = $make;
    }
    function setModel($model) {
        $this->model = $model;
    }
    function setVIN($VIN) {
        $this->VIN = $VIN;
    }


    function getMake() {
        return $this->make; 
    }
    function getModel() {
        return $this->model; 
    }
    function getVIN() {
        return $this->VIN; 
    }

    function getCarDetails() {
        $carDetails = 
        "make: " . $this->make . "<br>" 
        . "model: " . $this->model . "<br>"
        . "VIN: " . $this->VIN . "<br>";
        return $carDetails;
    }
    
}

class Inventory {
    private $cars = [];


    function addCar(Car $car) {
        $this->cars[] = $car;
    }

    function removeCar($vinNo) {
        foreach ($this->cars as $index => $car) {
            if ($car->getVIN() == $vinNo) {
                unset($this->cars[$index]);
                unset($car);
        }
    }
}
    function displayCars() {
        
        foreach($this->cars as $car) {
            // print_r($car);
            echo "<br>".$car->getCarDetails() . "<br>";
        }
    }
}

$car1 = new Car("Toyota", "Corolla", "1NXBR32E85Z415474");
$car2 = new Car("Honda", "Civic", "2HGES16593H548349");
$car3 = new Car("Ford", "Mustang", "1ZVHT82H485177568");
$car4 = new Car("Chevrolet", "Malibu", "1G1ZD5STXJF256789");
$car5 = new Car("BMW", "X5", "5UXCR6C56KL057876");
$car6 = new Car("Mercedes-Benz", "C-Class", "WDDGF8BB8AR123456");
$car7 = new Car("Audi", "A4", "WAUEFAFL3GA035678");


$inventory = new Inventory();
$inventory->addCar($car1);
$inventory->addCar($car2);
$inventory->addCar($car3);
$inventory->addCar($car4);
$inventory->addCar($car5);
$inventory->addCar($car6);
$inventory->addCar($car7);



$inventory->displayCars();

echo "<br>Removing car with VIN WAUEFAFL3GA035678<br><br>";

$inventory->removeCar("WAUEFAFL3GA035678");

$inventory->displayCars();

