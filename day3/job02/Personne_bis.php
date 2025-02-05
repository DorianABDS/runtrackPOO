<?php

abstract class Personne {

    private int $age;

    function __construct(?int $age = 14)
    {
        $this->age = $age;
    }

    public function setAge($age)
    {
        $this->age = $age;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function afficherAge()
    {
        echo  $this->age;
    }

    public function bonjour()
    {
        echo "Hello, ";
    }
 
    public function modifierAge(?int $newage = 15)
    {
        $this->setAge($newage);
    }
}

class Eleve extends Personne {

    function __construct(?int $age = 14,?int $newage = 15)
    {
        parent::__construct($age);
        $this->setAge($newage);
    }

    function allerEnCour(): void
    {
        echo "je vais en cours<br>";
    }

    public function afficherAge()
    {
        echo $this->getAge();
    }
}

$eleve = new Eleve();
$eleve->bonjour();
$eleve->allerEnCour();
$eleve->afficherAge();

class Professeur extends Personne {

    private string $matiereEnseignee;

    function __construct(?string $matiereEnseignee = "Anglais", ?int $age = 40)
    {
        parent::__construct($age);
        $this->bonjour();
        $this->matiereEnseignee = $matiereEnseignee;
    }

    public function getMatiereEnseignee()
    {
        return $this->matiereEnseignee;
    }

    public function setMatiereEnseignee($matiereEnseignee)
    {
        $this->matiereEnseignee = $matiereEnseignee;
    }

    public function enseigner()
    {
        echo "<br>Le cour d'" . $this->matiereEnseignee . " va commencer";
    }
}

$professeur = new Professeur();
$professeur->enseigner();