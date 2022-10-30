<?php
class Fruit
{
    public $name;
    public $color;
    public $netto;
    public $flavor;

    function __construct($name, $color, $netto = 150, $flavor = "sweet")
    {
        $this->name = $name;
        $this->color = $color;
        $this->netto = $netto;
        $this->flavor = $flavor;
    }

    function getName()
    {
        return $this->name;
    }

    function getColor()
    {
        return $this->color;
    }

    function getNetto()
    {
        return $this->netto;
    }

    function getFlavor()
    {
        return $this->flavor;
    }

    public function sayHello()
    {
        return "Fruits are very healthy";
    }
}

class Hamper
{
    public $fruit;

    function __construct($fruit)
    {
        $this->fruit = $fruit;
    }

    public function getData()
    {
        return $this->fruit->getName() . "_" . $this->fruit->getFlavor();
    }
}

$apple = new Fruit("Apple", "Red", 200, "sweet");
echo $apple->getName() . "<br>";
echo $apple->getColor() . "<br>";
echo $apple->getNetto() . "<br>";
echo $apple->getFlavor() . "<br>";

$hamper = new Hamper($apple);

echo $hamper->getData();
