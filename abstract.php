<?php
abstract class Shape
{
    abstract public function area();

    public function description()
    {
        return "This is shape ";
    }
}

class Circle extends Shape
{
    private $radius;
    public function __construct($radius)
    {
        $this->radius = $radius;
    }
    // Implement abstract method
    public function area()
    {
        return pi() * $this->radius * $this->radius;
    }
}

class Rectangle extends Shape
{
    private $width;
    private $height;

    public function __construct($width, $height)
    {
        $this->width = $width;
        $this->height = $height;
    }

    public function area()
    {
        return $this->width * $this->height;
    }
}

$circle = new Circle(2);
echo $circle->description();  //"This is a shape."
echo $circle->area();

echo '<br>';

$rec = new Rectangle(4, 5);
echo $rec->description();
echo $rec->area();
