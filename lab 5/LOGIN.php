<?php
    session_start();

    // Check if the form is submitted
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $username = trim($_POST['username']);
        $password = trim($_POST['password']);
        $confirm_password = trim($_POST['confirm_password']);

        // Validation
        if (empty($username) || empty($password) || empty($confirm_password)) {
            $error = "All fields are required!";
        } elseif ($password !== $confirm_password) {
            $error = "Passwords do not match!";
        } else {
            $_SESSION['status'] = true;
            $_SESSION['username'] = $username;
            header('Location: home.php'); // Redirect to home.php
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
            // Display error messages if any
            if (isset($error)) {
                echo "<p style='color: red;'>$error</p>";
            }
            ?>

            <label for="username">Username</label>
            <input type="text" id="username" name="username" required><br><br>

            <label for="password">Password</label>
            <input type="password" id="password" name="password" required><br><br>

            <label for="confirm_password">Confirm Password</label>
            <input type="password" id="confirm_password" name="confirm_password" required><br><br>

            <button type="submit">Register</button>
        </fieldset>
    </form>
</body>
</html>
