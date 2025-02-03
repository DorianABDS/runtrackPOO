<?php

class Operation {
    public int $nombre1;
    public int $nombre2;

    function __construct(?int $nombre1 = 2, ?int $nombre2 = 2)
    {
        $this->nombre1 = $nombre1;
        $this->nombre2 = $nombre2;
    }

    function calcule(): string {
        $result = "somme de $this->nombre1 et $this->nombre2 = " . ($this->nombre1 + $this->nombre2);
        return $result;
    }
}

$operation = new Operation();
echo ($operation->calcule());
