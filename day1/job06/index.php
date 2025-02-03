<?php

class Personnage {

    public $x;
    public $y;

    function __construct($x,$y) {
        $this->x = $x;
        $this->y = $y;
    }

    function gauche() {
        $this->x--;
    }

    function droite() {
        $this->x++;
    }

    function bas() {
        $this->y--;
    }

    function haut() {
        $this->y++;
    }

    function position() {
        return [$this->x, $this->y];
    }

    function Resultat(): string {
        $result = "$this->x, $this->y";
        return $result;
    }
}

$personnage = new Personnage(0, 0);

echo "<table border='1'>";
echo "<tr><th>Direction</th><th>Position (x, y)</th></tr>";

echo "<tr><td>Initiale</td><td>(" . implode(", ", $personnage->position()) . ")</td></tr>";

$personnage->haut();
echo "<tr><td>Déplacement verticale</td><td>(" . implode(", ", $personnage->position()) . ")</td></tr>";

$personnage->gauche();
echo "<tr><td>Déplacement horizontale</td><td>(" . implode(", ", $personnage->position()) . ")</td></tr>";

echo "</table><br>";

echo "Résultat final : " . $personnage->Resultat() ."";