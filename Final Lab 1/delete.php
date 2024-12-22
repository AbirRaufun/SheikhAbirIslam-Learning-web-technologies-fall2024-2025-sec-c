<?php
// delete.php

include('db.php');

$id = isset($_GET['id']) ? intval($_GET['id']) : 0;

if ($id > 0) {
    $sql = "DELETE FROM users WHERE id=$id";
    
    if (mysqli_query($conn, $sql)) {
        echo "User deleted successfully!<br>";
        echo '<a href="list_users.php">Go back to User List</a>';
    } else {
        echo "Error deleting user: " . mysqli_error($conn);
    }
} else {
    echo "Invalid user ID.";
}

mysqli_close($conn);
?>
