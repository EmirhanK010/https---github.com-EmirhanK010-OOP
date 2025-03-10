<?php

//Auteur Emirhan Kaya

// initialisatie
include_once "Fruit2.php";

// Main

//Maak een object banaan op basis van de classdefinitie Fruit
$banaan = new Fruit("Banaan", 2.2);

//$banaan->setPrijs =(2.20);
var_dump($banaan);
echo "<br>";

//Maak een tweede object appel op basis van de classdefinitie Fruit
$appel = new Fruit("Elstar");

var_dump($appel);
$appel->printFruit();
?>