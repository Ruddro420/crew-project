<?php

$userName = $_POST['username'] ?? "";
$email = $_POST['email'] ?? "";
$password = $_POST['password'] ?? "";

// append value in files

$file = fopen("data/userInfo.txt", "a");

fwrite($file, "user" . "," . $userName . "," . $email . "," . $password . "\n");

fclose($file);




?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
    <title>Register</title>
</head>

<body>
    <div class="login-page">
        <div class="form">
            <h2>Sign Up</h2>
            <form class="login-form" action="registration.php" method="POST">
                <input name="username" type="text" placeholder="username" required />
                <input name="email" type="email" placeholder="email" required />
                <input name="password" type="password" placeholder="password" required />
                <button type="submit" name="register">Register</button>
                <p class="message">Already registered? <a href="/">Login</a></p>
            </form>
        </div>
    </div>
</body>

</html>