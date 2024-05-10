<?php

$dsn = "mysql:host=localhost;dbname=myfirstdatabase";
$dbusername = "root";
$dbpassword = "";

try {
    //code...
    // pdo - php data object
    $pdo = new PDO($dsn, $dbusername, $dbpassword );
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    //throw $th;
    echo "Connection failed" . $e->getMessage();
}