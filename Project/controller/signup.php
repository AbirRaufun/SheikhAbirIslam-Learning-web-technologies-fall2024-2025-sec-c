<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Hash password
    $usertype = $_POST['usertype'];

    // Database connection
    $conn = new mysqli('localhost', 'root', '', 'travel');

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "INSERT INTO users (fullname, email, password, usertype) VALUES ('$fullname', '$email', '$password', '$usertype')";

    if ($conn->query($sql) === TRUE) {
        echo "Signup successful!";
        header("Location: login.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>