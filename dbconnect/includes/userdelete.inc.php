<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    # code...
    $username = $_POST["username"]; 
    $pwd = $_POST["pwd"];

    try {
        //code...
        require_once "dbh.inc.php";
        $query = "DELETE FROM users WHERE username = :username AND pwd = :pwd;";

        $stmt = $pdo->prepare($query);
        $stmt ->bindParam(":username", $username);
        $stmt ->bindParam(":pwd", $pwd);
        $stmt->execute();
        $pdo = null;
        $stmt = null;

        header("Location:../index.php");

        die();


    } catch (PDOException $e) {
        //throw $th;
        die("Query failed: " . $e->getMessage());
    }
} else {
    # code...
    header("Location:../index.php");
}
