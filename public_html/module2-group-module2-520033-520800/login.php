<?php 
session_start();
var_dump($_SESSION); // Debug session variables
//brings user to home page if already logged in
if(isset($_SESSION['user'])){
    header("Location: home.php");
    exit();
}

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $user = $_POST['user'];
    $users = file('users.txt', FILE_IGNORE_NEW_LINES);

    if(in_array($user, $users)){
        $_SESSION['user'] = $user;
        header("Location: home.php");
        exit();
    }
    else{
        $invalid = "Invalid Username. Try again";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <?php if(isset($invalid)): ?>
        <?php echo $invalid ?>
    <?php endif; ?>
    <form action="login.php" method="POST">
        <label for="userText">Username
        <input type="text" name="user" id="user" required>
        </label>
        <br>
        <!-- <label for="pass">Password
        <input type="text" name="password" id="password" required>
        </label> -->
        <button type="submit">Login</button>
    </form>
</body>
</html>
