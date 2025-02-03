<?php

class Operation {
    public int $nombre1;
    public int $nombre2;

    function __construct(?int $nombre1 = 2, ?int $nombre2 = 2)
    {
        $this->nombre1 = $nombre1;
        $this->nombre2 = $nombre2;
    }
}

$operation = new Operation();
echo $operation->nombre1 . ', ' . $operation->nombre2;