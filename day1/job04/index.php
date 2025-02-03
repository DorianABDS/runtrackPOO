<?php

class Point {

    public $x;
    public $y;

    function __construct($x,$y)
    {
        $this->x = $x;
        $this->y = $y;
    }

    function afficherLesPoints() {
        echo"point : (" . $this->x . "," . $this->y . ")<br>";
    }

    function afficherX() {
        echo"x = " . $this->x . "<br>";
    }

    function afficherY() {
        echo"y = " . $this->y . "<br>";
    }

    function changerX($nouveauX) {
        $this->x = $nouveauX;
    }

    function changerY($nouveauY) {
        $this->y = $nouveauY;
    }
}

$point1 = new Point(3,12);

$point1->afficherLesPoints();
$point1->afficherX();
$point1->afficherY();

$point1->changerX(23);
$point1->changerY(42);

$point1->afficherLesPoints();
$point1->afficherX();
$point1->afficherY();