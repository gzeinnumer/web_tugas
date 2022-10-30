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

    public function getDetail()
    {
        return $this->getName() . "_" . $this->getColor() . "_" . $this->getFlavor() . "<br>";
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

class SweetFruit extends Fruit
{
    public $code;
    public function __construct($name, $color, $netto = 150, $flavor = "sweet", $code)
    {
        parent::__construct($name, $color, $netto, $flavor);
        $this->code = $code;
    }

    public function sayHello()
    {
        return "This is Sweet Fruit, you like it?" . parent::getDetail();
    }
}
class NoSweetFruit extends Fruit
{
    public $sugar;
    public function __construct($name, $color, $netto = 150, $flavor = "sweet", $sugar)
    {
        parent::__construct($name, $color, $netto, $flavor);
        $this->sugar = $sugar;
    }

    public function sayHello()
    {
        return "This is No Sweet Fruit, you like it?" . parent::getDetail();
    }
}


$apple = new Fruit("Apple", "Red", 200, "sweet");
echo $apple->getName() . "<br>";
echo $apple->getColor() . "<br>";
echo $apple->getNetto() . "<br>";
echo $apple->getFlavor() . "<br>";

$hamper = new Hamper($apple);

echo $hamper->getData();


$a = new SweetFruit("Lecy", "Red", 50, "Sweet", 911);

echo $a->sayHello();

$b = new NoSweetFruit("Tabu Mantah", "Gray", 500, "No Sweet", 143);

echo $b->sayHello();
