<?php

class Personne {

    private int $age;
    private int $modifier;

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

    public function modifierAge(?int $newage = 16)
    {
        $this->setAge($newage);
    }
}

$personne = new Personne();
$personne->bonjour();

class Eleve extends Personne
{

    function __construct(?int $age = 14)
    {
        parent::__construct($age);
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
$eleve->allerEnCour();
$eleve->modifierAge();
// $eleve->afficherAge();

class Professeur {

    private string $matiereEnseignee;

    function __construct(?string $matiereEnseignee)
    {
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
        echo "<br>Le cour de " . $this->matiereEnseignee . " va commencer";
    }
}

$professeur = new Professeur("Mathématiques");
$professeur->enseigner();