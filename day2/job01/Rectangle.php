<?php 

class Rectangle {

    private int $longueur;
    private int $largeur;

    function __construct(?int $longueur = 10, ?int $largeur = 5)
    {
        $this->longueur = $longueur;
        $this->largeur = $largeur;
    }

    public function setDimension($longueur, $largeur) {
        if (!empty($longueur) AND is_int($longueur) AND !empty($largeur) AND is_int($largeur)) {
            $this->longueur = $longueur;
            $this->largeur = $largeur;
        }
    }

    public function getDimension() {
        return [$this->longueur, $this->largeur];
    }
}

$rectangle = new Rectangle();
$rectangle->setDimension(45, 15);
$result_dimension = $rectangle->getDimension();
echo "Longueur : " . $result_dimension[0] . "cm<br>Largeur : " . $result_dimension[1] . "cm";