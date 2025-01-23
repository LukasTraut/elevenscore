<?php
require 'core/database.php';

$myDbCon = connectToDb();

$username = $_SESSION["liau"];



if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $stmt = $myDbCon->prepare("INSERT INTO `newss` (created_by, title, content, img_source) VALUES (:username, :titel, :text, :bildlink)");
    $stmt->bindValue(':username', htmlspecialchars($username));
    $stmt->bindValue(':titel', htmlspecialchars($_POST['title']));
    $stmt->bindValue(':text', htmlspecialchars($_POST['news']));
    $stmt->bindValue(':bildlink', htmlspecialchars($_POST['pic']));
    $stmt->execute();

}