<?php
require 'core/database.php';
$myDbCon = connectToDb();
$myStmt = $myDbCon->prepare('select * from newss ORDER BY id DESC');
$myStmt->execute();
$newss = $myStmt->fetchAll();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $newss[] = [
        'created_by' => $_POSTS['name'],
        'news_title' => $_POSTS['titel'],
        'news_text' => $_POSTS['text'],
        'img_source' => $_POSTS['Bildlink'] ?? ''
        
    ];
}