<?php

class Anime {

    private string $name;
    private string $score;
    
    function __construct(string $name, int $score)
    {
        $this->name = $name;
        $this->score = $score;
    }
}
