<?php

include 'AnimeList.php';

class Cli {
    private $newAnime;
    
    private  $connection;

    public function __construct($connection) {
        $this->connection = $connection;
    }

    public function run(): void
    {
        while(true) {
            echo <<<EOL
                \nHi Canhassi!
                -> Choose an option:
                    1-  Add new anime
                    2-  Edit an anime
                    3-  Show all
                    4-  Delete anime
                    5-  Exit program\n
            EOL;
            
            $userInput = trim(fgets(STDIN));

            $this->handleInput($userInput);
        }
    }   
    
    private function handleInput(int $userInput)
    {
        $animeList = new AnimeList($this->connection);

        match ($userInput) {
            1       => $animeList->insert(),
            2       => $animeList->edit(),
            3       => $animeList->showAll(),
            4       => $animeList->delete(),
            5       => $animeList->exit(),
            // default => $this->displayDefault(),
        };
    }
}


