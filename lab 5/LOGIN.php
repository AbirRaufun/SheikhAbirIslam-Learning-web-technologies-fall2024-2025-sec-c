<?php
session_start();

// Check form is submitted or not
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    //  Login button
    if (isset($_POST['login'])) {
        $username = trim($_POST['username']);
        $password = trim($_POST['password']);
        $confirm_password = trim($_POST['confirm_password']);

        // Validation for login
        if (empty($username) || empty($password) || empty($confirm_password)) {
            $error = "All fields are required!";
        } elseif ($password !== $confirm_password) {
            $error = "Passwords do not match!";
        } else {
            // login success
            $_SESSION['status'] = true;
            $_SESSION['username'] = $username;
            header('Location: home.php'); // go to home.php
            exit();
        }
    }

    //  Signup button
    if (isset($_POST['signup'])) {
        header('Location: registration.php'); // go to registration.php
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

            <label for="confirm_password">Confirm Password</label>
            <input type="password" id="confirm_password" name="confirm_password"><br><br>
            <button type="submit" name="login">Login</button>
            <button type="submit" name="signup">Signup</button>
        </fieldset>
    </form>
</body>
</html>
