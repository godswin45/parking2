<?php



if($_SERVER["REQUEST_METHOD"] = "POST"){

    $email = htmlspecialchars($_POST["firstname"]);
    $pass = htmlspecialchars($_POST["lastname"]);

    if(empty($firstname)){
        exit();
        header("Location: ../Login.php");
    }
    if(empty($lastname)){
        exit();
        header("Location: ../Login.php");
    }
    echo"USER login info";
    echo"<br>";
    echo $firstname;
    echo"<br>";
    echo $lastname;

    header("Location: ../Login.php");
} else {
    header("Location: ../Login.php");
}