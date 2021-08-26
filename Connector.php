<?php
function getDBConnection(): bool|mysqli|null
{
    $host = "localhost:3306";
    $username = "root";
    $password = "root";
    $dbname = "dbbarbershop";
    $dbconnection = mysqli_connect($host, $username, $password, $dbname);
    return $dbconnection;
}