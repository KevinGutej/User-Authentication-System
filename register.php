<?php
include 'database.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);

    $stmt = $db->prepare("INSERT INTO /*create table users*/  (username, password) VALUES (?, ?)");
    $stmt->execute([$username, $password]);

    header("Location: index.html");
    exit();
}
?>