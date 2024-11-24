<?php
session_start();

// Check form submitted or not
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = trim($_POST['name']);
    $gender = trim($_POST['gender']);
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    // Validation
    if (empty($name) || empty($gender) || empty($email) || empty($password)) {
        $error = "All fields are required!";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = "Invalid email format!";
    } else {
        // storing my data into session
        $_SESSION['status'] = true;
        $_SESSION['name'] = $name;
        $_SESSION['gender'] = $gender;
        $_SESSION['email'] = $email;

        // go to home.php
        header('Location: home.php');
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
</head>
<body>
    <form action="registration.php" method="POST">
        <fieldset>
            <legend>Registration</legend>

            <?php
            // error msg 
            if (isset($error)) {
                echo "<p style='color: red;'>$error</p>";
            }
            ?>

            <label for="name">Name</label>
            <input type="text" id="name" name="name" required><br><br>

            <label for="gender">Gender</label>
            <select id="gender" name="gender" required>
                <option value="">Select</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
                <option value="Other">Other</option>
            </select><br><br>

            <label for="email">Email</label>
            <input type="email" id="email" name="email" required><br><br>

            <label for="password">Password</label>
            <input type="password" id="password" name="password" required><br><br>

            <button type="submit">Confirm</button>
        </fieldset>
    </form>
</body>
</html>
