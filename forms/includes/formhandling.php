<?php

//var_dump($_SERVER["REQUEST_METHODS"]); checks the request type, if post or get

// method 1 best method
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $firstname = htmlspecialchars($_POST["firstname"]);
    $lastname = htmlspecialchars($_POST["lastname"]);
    $favoritepet = htmlspecialchars($_POST["favoritepet"]);
    
    if(empty($firstname)){
        exit();
        header("Location: ../index.php");

    }
    echo "This is are the data that the user submitted";
    echo "<br>";
    echo $firstname;
    echo "<br>";
    echo $lastname;
    echo "<br>";
    echo $favoritepet;

    header("Location: ../index.php");
}else{
    header("Location: ../index.php");

}

// method 2
// if(isset($_POST["submit"])){

// }
