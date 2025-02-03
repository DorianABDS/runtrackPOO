<?php

class Animal {
    public string $age;
    public string $prenom;

    function __construct(?string $age = "0", ?string $prenom = "") {
        $this->age = $age;
        $this->prenom = $prenom;
    }

    function Viellir() {
        $this->age += 1;
    }

    function Nommer() {
        $this->prenom = "Luna";
    }
}

$animal = new Animal();
echo "L'age de l'animal est de " . $animal->age . " an<br>";

$animal->Viellir();
echo "L'age de l'animal est désormais " . $animal->age . " an<br>";

$animal->Nommer();
echo "L'animal se nomme " . $animal->prenom;