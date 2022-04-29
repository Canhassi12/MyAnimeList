<?php

require 'dataBase.php';
include 'Anime.php';

class AnimeList {

    public function insert() : void
    {
        $name = fgets(STDIN);
        $score = fgets(STDIN);  
        new Anime($name, $score);

        $sql = "INSERT INTO anime (Name, Score)
        VALUES ('$name', '$score')";  
        
        data($sql);
    }

    public function edit() : void
    {
        echo "Write a anime ID if you want editing" . PHP_EOL;
        $ID = fgets(STDIN);
        echo "Write the Name:" . PHP_EOL;
        $newName = fgets(STDIN);
        echo "Write the Score:" . PHP_EOL;
        $newScore = fgets(STDIN);

        $sql = "UPDATE anime set Name = '$newName', Score = $newScore where AnimeID = $ID";

        dataEdit($sql);
    }

    public function showAll()
    { 
       $sql = "SELECT * from anime";

       dataShow($sql);
    }

    public function delete() : void
    {

    }
}