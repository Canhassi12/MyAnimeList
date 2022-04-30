<?php 

class DataBase {

    private $connection;

    public function __construct()
    {
        $this->connection = new PDO('mysql:host=localhost;dbname=anime', 'root', 'root');
    }

    public function dataInsert($query): void 
    {
        $this->connection->query($query);
        echo 'successfully added' . PHP_EOL;  
    }
    
    public function dataEdit($query): void
    {
        $this->connection->query($query);
        echo 'successfully edited' . PHP_EOL;  

    }

    public function dataDelete($query): void 
    {
        $this->connection->query($query);
        echo 'successfully deleted' . PHP_EOL;  

    }
    
    public function dataShow($query): void
     {
         foreach($this->connection->query($query) as $fields) {
             echo "\nID: " . $fields['AnimeID'] . PHP_EOL;
             echo 'Name: ' . $fields['Name'] ;
             echo 'Score: ' . $fields['Score'] .PHP_EOL;
        }
    }
}
