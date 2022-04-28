<?php

class Anime {

    private string $name;
    private string $score;
    

    function __construct(string $name, int $score)
    {
        $this->name = $name;
        $this->score = $score;
    }

    public function printAll() {
        echo $this->name . PHP_EOL;
        echo $this->score . PHP_EOL;
        echo $this->recomendation . PHP_EOL;
    }
}
