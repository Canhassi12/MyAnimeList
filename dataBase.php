<?php 

function data($query): void 
{
    $dbh = new PDO('mysql:host=localhost;dbname=anime', 'root', 'root');

    $dbh->query($query);
}

function dataShow($query): void
{
    $dbh = new PDO('mysql:host=localhost;dbname=anime', 'root', 'root');

    foreach($dbh->query($query) as $fields) {

        echo "\nID: " . $fields['AnimeID'] . PHP_EOL;
        echo 'Name: ' . $fields['Name'] ;
        echo 'Score: ' . $fields['Score'] .PHP_EOL;
    }
}

function dataEdit($query): void 
{
    $dbh = new PDO('mysql:host=localhost;dbname=anime', 'root', 'root');

    $dbh->query($query);
}

