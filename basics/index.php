<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bootstrap Site</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
</head>
<body>
    <!-- Introduction -->
    <?php
    echo "Hello World!";
    ?>

    <!-- You can declare php inside html element -->
    <p>This is and <?php echo "Awesome"; ?> paragraph</p>

    <!-- declaring a variable in php -->
    <?php
    $name = "Emmanuel Lorey";
    echo $name;
    ?>

    <!-- Data Types -->
    <?php
    // Scalar types (One Value)
    $string = "Daniel";
    $int = 123456789;
    $float = 2.5678;
    $boolean = false ;// true or false value

    // Array Types(Multiple Values)
    $array = array("Daniel", "Bella", "Frida");
    $array = ["Daniel", "Bella", "Frida"];

    // Object Type
    // $object = new Car();

    // global variables
 
    echo $_SERVER["DOCUMENT_ROOT"];
    echo "<br>";
    echo $_SERVER["PHP_SELF"];
    echo "<br>";
    echo $_SERVER["SERVER_NAME"];
    echo "<br>";
    echo $_SERVER["REQUEST_METHOD"];
    echo "<br>";
    echo $_GET["name"];
    echo "<br>";
    echo $_POST["name"];
    echo "<br>";
    echo $_REQUEST["name"]; // used to grab post, get and cookies
    echo "<br>";
    echo $_FILES["name"]; // access pictures and documents
    echo "<br>";
    echo $_COOKIE["name"]; // small file that stores users details and documents
    echo "<br>";
    echo $_SESSION["username"]; // only access the current data and when browser is closed it forgets the session
    echo "<br>";
    echo $_ENV[""]; // environment variables
    ?>
   
</body>
</html>