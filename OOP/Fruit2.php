<?php



class Fruit {
    private $name;
    private $price;

    // Constructor om naam en optioneel prijs in te stellen
    public function __construct($name, $price = 0) {
        $this->name = $name;
        $this->price = $price;
    }

    public function setPrice($price) {
        $this->price = $price;
    }

    public function getPrice() {
        return $this->price;
    }

    public function printFruit() {
        echo "Fruit: " . $this->name . " - Prijs: €" . number_format($this->price, 2) . "<br>";
    }
}
?>