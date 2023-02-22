<?php

$server = 'localhost:3307';
$username = 'agustin';
$password = 'Ireliagod1!';
$database = 'integra';

try {
  $conn = new PDO("mysql:host=$server;dbname=$database;", $username, $password);
} catch (PDOException $e) {
  die('Connection Failed: ' . $e->getMessage());
}

?>