<?php

class Vehicle
{
    private $brand;
    private $color;
    public function __construct($brand, $color)
    {
        $this->brand = $brand;
        $this->color = $color;
    }
    // Public method to get vehicle details
    public function getDetails()
    {
        return "This is a {$this->color} {$this->brand}.";
    }
}

// Inheritance: A Car is a type of Vehicle
class Car extends Vehicle
{
    private $seats;
    public function __construct($brand, $color, $seats)
    {
        // Call the parent constructor
        parent::__construct($brand, $color);
        $this->seats = $seats;
    }

    public function getDetails()
    {
        return parent::getDetails() . " It has {$this->seats} seats.";
    }
}

$newObej = new Car("Totya", "Black", "2");
echo $newObej->getDetails();