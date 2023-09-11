<?php

// echo "<pre>";
// var_dump($_POST);
// echo "</pre>";

$name = $_POST["name"];
$username = $_POST["username"];
$email = $_POST["email"];
$age = $_POST["age"];

$htmlentities = htmlentities($name);
$addslashes = addslashes($username);
$onlywords = preg_replace("/\d/","",$username);
$onlynumbers = preg_replace("/\D/","",$username);
$email = filter_var($email, FILTER_SANITIZE_EMAIL);
$sanitize_int = filter_var($age,FILTER_SANITIZE_NUMBER_INT);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>datos de mi usuario</title>
</head>
<body>
    <p>Nombre:</p>
     <?= $htmlentities ?>

     <p>Username:</p>
     <?= $addslashes ?>

     <p>Username sin numeros:</p>
     <?= $onlywords ?>

     <p>Username sin numeros:</p>
     <?= $onlynumbers ?>


     <p>Email:</p>
     <?= $email ?>

     <p>Age:</p>
     <?= $sanitize_int ?>

</body>
</html>