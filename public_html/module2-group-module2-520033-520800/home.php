<?php

//if you're not logged in, go back to login page
session_start();
var_dump($_SESSION); // Debug session variables
if(!isset($_SESSION['user'])){
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME</title>
</head>
<body>
    <h1>HI</h1>
    <a href="logout.php">Logout</a>
</body>
</html>