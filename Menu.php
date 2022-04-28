<?php

include 'AnimeList.php';

class Menu {
    private $newAnime;

    public function displayMenu(): void
    {
        echo <<<EOL
            Hi Canhassi!
            -> Choose an option:
                1-  Add new anime
                2-  Edit an anime
                3-  Exit program
        EOL;
        
        $userInput = trim(fgets(STDIN));

        $this->handleInput($userInput);
    }   
    
    private function handleInput(int $userInput)
    {
        $animeList = new AnimeList();

        match ($userInput) {
            1       => $animeList->insert(),
            // 2       => $animeList->edit(),
            3       => $animeList->delete(),
            // default => $this->displayDefault(),
        };
    }
}
