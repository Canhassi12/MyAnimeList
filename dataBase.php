<?php 
function data($query) 
{
    $dbh = new PDO('mysql:host=localhost;dbname=anime', 'root', 'root');
    
    $dbh->query($query);
}

function dataShow($query) {

    $dbh = new PDO('mysql:host=localhost;dbname=anime', 'root', 'root');

    foreach($dbh->query($query) as $fields) {

        echo "\nID: " . $fields['AnimeID'] . PHP_EOL;
        echo 'Name: ' . $fields['Name'] ;
        echo 'Score: ' . $fields['Score'] .PHP_EOL;
    }

  
}

