<?php
include 'src/Cli.php';
include 'src/DataBase.php';

$mysql = new DataBase();

$cli = new Cli($mysql);

$cli->run();
