<?php

include 'Anime.php';

class AnimeList {

    private $connection;

    public function __construct($connection)
    {
        $this->connection = $connection;
    }

    public function exit() 
    {
        echo 'byee, see you!!' . PHP_EOL;
        die();
    }

    public function insert() : void
    {
        echo "Name: " . PHP_EOL;
        $name = fgets(STDIN);
        echo "Score: " . PHP_EOL;
        $score = fgets(STDIN);  
        new Anime($name, $score);

        $sql = "INSERT INTO anime (Name, Score)
        VALUES ('$name', '$score')"; 
        
        $this->connection->dataInsert($sql);
    }

    public function edit() : void
    {
        echo "Write an anime ID if you want to editing anime" . PHP_EOL;
        $ID = fgets(STDIN);
        echo "Write the Name:" . PHP_EOL;
        $newName = fgets(STDIN);
        echo "Write the Score:" . PHP_EOL;
        $newScore = fgets(STDIN);

        $sql = "UPDATE anime set Name = '$newName', Score = $newScore where AnimeID = $ID";

        $this->connection->dataEdit($sql);
    }

    public function showAll()
    { 
       $sql = "SELECT * from anime";

       $this->connection->dataShow($sql);
    }

    public function delete() : void
    {
        echo "Write an animeID if you want to DELETING anime" . PHP_EOL;
        $ID = fgets(STDIN);

        echo "Do you sure want DELETE?" . PHP_EOL;
        $confirm = fgets(STDIN);

        if($confirm == 'n' || $confirm == 'N') {

            exit();
        }
        else 
        {
            $sql = "DELETE FROM anime where AnimeID = $ID";

            $this->connection->dataDelete($sql);
        }
    }
}