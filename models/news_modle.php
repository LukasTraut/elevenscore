<?php
require 'core/database.php';
$myDbCon = connectToDb();
$myStmt = $myDbCon->prepare('select * from newss ORDER BY id DESC');
$myStmt->execute();
$newss = $myStmt->fetchAll();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $newss[] = [
        'created_by' => $_NEWS['name'],
        'news_title' => $_NEWS['titel'],
        'news_text' => $_NEWS['text'],
        'img_source' => $_NEWS['Bildlink'] ?? ''
        
    ];
}