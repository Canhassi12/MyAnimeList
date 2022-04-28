<?php 
function data($query) 
{
    $user = 'root';
    $pass = 'root';
    
    $dbh = new PDO('mysql:host=localhost;dbname=anime', $user, $pass);
    
    $sth = $dbh->query($query);
}

