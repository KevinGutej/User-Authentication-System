<?php

$host = 'localhost';
$dbname = '';
$username = ''; // fill this out with my database credentials
$password = '';

try {
    $db = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
} catch (PDOException $e) {
    die("Connection was unsuccesful: " . $e->getMessage());
}
//The catch block is used to catch any exceptions that mIght be thrown during the Attempt to connect to the database.
//die() if an exception does occur, it outputs an error message using die and terminates the script
?>

