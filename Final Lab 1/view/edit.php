<?php
// edit_user.php

include('db.php');

$id = isset($_GET['id']) ? intval($_GET['id']) : 0;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    
    $sql = "UPDATE users SET username='$username', password='$password', email='$email' WHERE id=$id";
    
    if (mysqli_query($conn, $sql)) {
        echo "User updated successfully!<br>";
        echo '<a href="list_users.php">Go back to User List</a>';
    } else {
        echo "Error updating user: " . mysqli_error($conn);
    }
} else {
    $sql = "SELECT * FROM users WHERE id=$id";
    $result = mysqli_query($conn, $sql);

    if ($row = mysqli_fetch_assoc($result)) {
        echo '<form method="POST" action="edit_user.php?id=' . $row['id'] . '">
                Username: <input type="text" name="username" value="' . $row['username'] . '"><br>
                Password: <input type="password" name="password" value="' . $row['password'] . '"><br>
                Email: <input type="email" name="email" value="' . $row['email'] . '"><br>
                <input type="submit" value="Update User">
              </form>';
    } else {
        echo "User not found.";
    }
}

mysqli_close($conn);
?>
