<?php
// insert.php

include('db.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    
    $sql = "INSERT INTO users (username, password, email) VALUES ('$username', '$password', '$email')";
    
    if (mysqli_query($conn, $sql)) {
        echo "User added successfully!<br>";
        echo '<a href="list_users.php">Go back to User List</a>';
    } else {
        echo "Error adding user: " . mysqli_error($conn);
    }
} else {
    echo '<form method="POST" action="insert_user.php">
            Username: <input type="text" name="username"><br>
            Password: <input type="password" name="password"><br>
            Email: <input type="email" name="email"><br>
            <input type="submit" value="Add User">
          </form>';
}

mysqli_close($conn);
?>
