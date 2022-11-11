<?php

$host = "localhost";

$password = "NjScT4uXBNwEe5T1";

$username = "islomovu_nomi";

$databasename = "islomovu_markazbot";

global $db;

setlocale(LC_ALL,"ru_RU.UTF8");

$db = new mysqli($host,$username,$password,$databasename,3306);

if($db->connect_errno)
{
    echo "Xatolik";
}

