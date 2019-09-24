<?php

$servername = 'localhost';
$username = 'matteo';
$password = 'bool';
$dbname = 'beverageDB';

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn -> connect_error) {
    var_dump('error connecting db');
    var_dump($conn);
    die();
}

?>