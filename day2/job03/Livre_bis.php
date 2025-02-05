<?php

class Livre {
    private $couverture;
    private $page;
    private $disponible = true;

    public function setCouverture($titre, $auteur) {
        $this->couverture = [$titre, $auteur];
    }

    public function getCouverture() {
        return $this->couverture;
    }

    public function setPage($page) {
        $this->page = $page;
    }

    public function getPage() {
        return $this->page;
    }

    public function setDisponible($disponible) {
        $this->disponible = $disponible;
    }

    public function getDisponible() {
        return $this->disponible;
    }

    public function Emprunter() {
        if ($this->disponible) {
            $this->setDisponible(false);
            return "Le livre a été emprunté.";
        } else {
            return "Erreur : le livre n'est pas disponible.";
        }
    }

    public function Rendre() {
        if (!$this->disponible) {
            $this->setDisponible(true);
            return "Le livre a été rendu.";
        } else {
            return "Le livre est déjà disponible.";
        }
    }
}

$livre = new Livre();
$livre->setCouverture("Cinq-cent briques sont dans un avion, une tombe de l'avion.<br>Combien en reste-t-il ?<br>", "Dorian<br>");
$livre->setPage(1);
$disponible = $livre->getDisponible() ? "Oui" : "Non";
$emprunter = $livre->Emprunter();
$rendre = $livre->Rendre();
$result_couverture = $livre->getCouverture();
$result_page = $livre->getPage();

echo "Titre du livre : " . $result_couverture[0] . "<br>Nom de l'auteur : " . $result_couverture[1] . "<br>Nombre de pages : " . $result_page . "<br><br>";
echo "Le livre est-il disponible ? " . $disponible . "<br>";
echo "Puis-je emprunter le livre ? " . $emprunter . "<br>";
echo "Je vous rends le livre ? " . $rendre . "<br>";
?>
