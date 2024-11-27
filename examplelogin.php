<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title>example login</title>
</head>
<body>
<form action="login.php" method="post">
        <label for="firstname">Firstname:</label>
        <input id="firstname" type="text" name="firstname">

        <label for="lastname">Lastname:</label>
        <input id="lastname" type="text" name="lastname">

        <button type="submit">Submit</button>
    </form>

    </body>
</html>
<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Validate and sanitize input
    $firstname = filter_var($_POST["firstname"], FILTER_SANITIZE_STRING);
    $lastname = filter_var($_POST["lastname"], FILTER_SANITIZE_STRING);

    if(empty($firstname)){
        exit();
        
    }
    if(empty($lastname)){
        exit();
        
    }
    echo"USER login info";
    echo"<br>";
    echo $firstname;
    echo"<br>";
    echo $lastname;

    
} 
else {
    // Securely process the data (e.g., store in a database)
    // ...

    echo "User login info:<br>";
    echo $firstname . "<br>";
    echo $lastname;
}
?>