<?php 

function connectToDatabase() {

    $pdo = new PDO('mysql:host=mysql2.webland.ch;dbname=d041e_urs', 'd041e_urs_ro', 'PW_d041e_urs_ro', [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
        PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
    ]);

    return $pdo;
}
function connectToDb() {

    $pdo = new PDO('mysql:host=mysql2.webland.ch;dbname=d041e_lutraut', 'd041e_lutraut', 'BLJ_db_2024', [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
        PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
    ]);

    return $pdo;
} 