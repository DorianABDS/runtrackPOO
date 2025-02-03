<?php

class Personne {
    public string $nom;
    public string $prenom;

    function __construct(?string $nom = "", ?string $prenom = "")
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
    }

    function Se_presenter(): string {
        $result = "Je suis $this->nom, $this->prenom";
        return $result;
    }
}

$personne1 = new Personne("Doe", "John");
$personne2 = new Personne("Dupond", "Jean");
echo $personne1->Se_presenter() . "<br>";
echo $personne2->Se_presenter() . "<br>";