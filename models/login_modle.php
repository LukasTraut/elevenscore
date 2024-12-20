<?php

require "core/database.php";

$signup = [
    
];

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $username = htmlspecialchars($_POST["username"], ENT_QUOTES, 'UTF-8');
    $pass = htmlspecialchars($_POST["password"], ENT_QUOTES, 'UTF-8');

    $connection = connectToDb();
    $stmt = $connection->prepare('SELECT * FROM signup WHERE username = :username');
    $stmt->execute([':username' => $username]);
    $userOnDb = $stmt->fetch();

    if ($userOnDb === false) {
        echo 'Benutzer ' . htmlspecialchars($username, ENT_QUOTES, 'UTF-8') . ' existiert nicht.';
    } else {
        if ($pass === $userOnDb['password']) {
            echo 'Passwort korrekt';
            $_SESSION["liau"] = $username;
            header("location: home");
            exit;
        } else {
            echo 'Passwort nicht korrekt';
        }
    }
}

