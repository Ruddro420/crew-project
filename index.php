<?php
// session start

session_start();

// get data form login form
$getEmail = $_POST['getEmail'] ?? "";
$getPass = $_POST['getPassword'] ?? "";

// get file from files
$fp = fopen("./data/userInfo.txt", "r");

// array declare
$role = [];
$userName = [];
$email = [];
$pass = [];
$error = '';

$errorMessage = '';



// convert file to array
while ($line = fgets($fp)) {
    $userInfo = explode(",", $line);
    array_push($role, trim($userInfo[0]));
    array_push($userName, trim($userInfo[1]));
    array_push($email, trim($userInfo[2]));
    array_push($pass, trim($userInfo[3]));
}
fclose($fp);

// check user login

if (isset($_POST['login'])) {
    for ($i = 0; $i < count($role); $i++) {
        if ($getEmail == $email[$i] && $getPass == $pass[$i] && $role[$i] == 'admin') {
            $_SESSION['userName'] = $userName[$i];
            $_SESSION['email'] = $email[$i];
            $_SESSION['role'] = 'admin';
            header("location: ./dashboard/admin.php");
        } else if ($getEmail == $email[$i] && $getPass == $pass[$i] && $role[$i] == 'user') {
            $_SESSION['userName'] = $userName[$i];
            $_SESSION['email'] = $email[$i];
            $_SESSION['role'] = $role[$i];
            header("location: ./dashboard/user.php");
        } else {
            $errorMessage = 'Email or password is incorrect';
        }
    }
}


?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
    <title>Login</title>
</head>

<body>
    <div class="login-page">
        <div class="form">
            <h2>Login</h2>
            <p style="color:red"><?php echo $errorMessage; ?></p>
            <form class="login-form" action="index.php" method="POST">
                <input name="getEmail" type="email" placeholder="email" required />
                <input name="getPassword" type="password" placeholder="password" required />
                <button type="submit" name="login">login</button>
                <p class="message">Not registered? <a href="./registration.php">Create an account</a></p>
            </form>
        </div>
    </div>
</body>

</html>