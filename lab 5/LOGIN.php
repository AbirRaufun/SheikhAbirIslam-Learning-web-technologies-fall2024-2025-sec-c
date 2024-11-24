<?php
session_start();

// check submitted or not
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Login button
    if (isset($_POST['login'])) {
        $username = trim($_POST['username']);
        $password = trim($_POST['password']);

        // Validation for login
        if (empty($username) || empty($password)) {
            $error = "Username and Password are required!";
        } else {
            // login 
            $_SESSION['status'] = true;
            $_SESSION['username'] = $username;
            header('Location: home.php'); // go to home.php
            exit();
        }
    }

    // Signup button
    if (isset($_POST['signup'])) {
        header('Location: registration.php'); // go to reg.php
        exit();
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LogIN</title>
</head>
<body>
    <form action="LOGIN.php" method="POST">
        <fieldset>
            <legend>LOGIN</legend>

            <?php
            // error msg
            if (isset($error)) {
                echo "<p style='color: red;'>$error</p>";
            }
            ?>

            <label for="username">Username</label>
            <input type="text" id="username" name="username"><br><br>

            <label for="password">Password</label>
            <input type="password" id="password" name="password"><br><br>
            <button type="submit" name="login">Login</button>
            <button type="submit" name="signup">Signup</button>
        </fieldset>
    </form>
</body>
</html>
