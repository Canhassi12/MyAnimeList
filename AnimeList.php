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

    // public function edit() : void
    // {
    //     $sql = "update "
        
    //     data($sql);
    // }

    public function delete() : void
    {

    }
}