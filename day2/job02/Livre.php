<?php

class Livre {

    private string $titre;
    private string $auteur;
    private int $nb_page;

    function __construct(?string $titre = "", string $auteur = "",?int $nb_page = 0)
    {
        $this->titre = $titre;
        $this->auteur = $auteur;
        $this->nb_page = $nb_page;
    }

    public function setCouverture($titre, $auteur) {
        if (!empty($titre) AND is_string($titre) AND !empty($auteur) AND is_string($auteur)) {
            $this->titre = $titre;
            $this->auteur = $auteur;
        }
    }

    public function setPage($nb_page) {
        if (!empty($nb_page) AND is_int($nb_page)) {
            $this->nb_page = $nb_page;
        }
    }

    public function getCouverture() {
        return [$this->titre, $this->auteur];
    }

    public function getPage() {
        return $this->nb_page;
    }
}

$livre = new Livre();
$livre->setCouverture("Cinq-cent briques sont dans un avion, une tombe de l'avion.<br>Combien en reste-t-il ?<br>", "Dorian<br>");
$livre->setPage(+1);
$result_couverture = $livre->getCouverture();
$result_page = $livre->getPage();
echo "Titre du livre : " . $result_couverture[0] . "<br>Nom de l'auteur : " . $result_couverture[1] . "<br>Nombre de pages : " . $result_page;
