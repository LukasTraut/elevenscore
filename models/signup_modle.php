<?php
require 'core/database.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    $username = htmlspecialchars($_POST['username']);
    $password = htmlspecialchars($_POST['password']);

    $connection = connectToDb();

    $stmt = $connection->prepare('INSERT INTO signup (username, password) VALUES (:username, :password)');

    $stmt->bindParam(':username', $username);
    $stmt->bindParam(':password', $password);


 
    if (empty($username)||empty($password)) {
        echo "Fehler beim Hinzufügen deines Kontos.";
    } else {
        $stmt->execute();
        echo "Konto erfolgreich hinzugefügt!";
        header("location: home");
        exit;
    }
}
?>