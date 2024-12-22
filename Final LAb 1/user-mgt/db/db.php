<?php
// Database connection
$conn = mysqli_connect('127.0.0.1', 'root', '', 'webtech');
if (!$conn) {
    die("Database connection failed: " . mysqli_connect_error());
}

// Determine the action
$action = isset($_GET['action']) ? $_GET['action'] : 'default';

switch ($action) {
    case 'login':
        // Login functionality
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $username = $_POST['username'];
            $password = $_POST['password'];
            $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0) {
                session_start();
                $_SESSION['username'] = $username;
                echo "Login successful!";
            } else {
                echo "Invalid username or password.";
            }
        } else {
            // Display login form
            echo '<form method="POST" action="?action=login">
                    Username: <input type="text" name="username"><br>
                    Password: <input type="password" name="password"><br>
                    <input type="submit" value="Login">
                  </form>';
        }
        break;

    case 'logout':
        // Logout functionality
        session_start();
        session_destroy();
        echo "You have been logged out.";
        break;

    case 'view':
        // View a single user's details
        $id = isset($_GET['id']) ? intval($_GET['id']) : 0;
        $sql = "SELECT * FROM users WHERE id=$id";
        $result = mysqli_query($conn, $sql);
        if ($row = mysqli_fetch_assoc($result)) {
            echo "User Details:<br>";
            echo "Username: " . $row['username'] . "<br>";
            echo "Email: " . $row['email'] . "<br>";
        } else {
            echo "User not found.";
        }
        break;

    case 'list':
        // Display all users
        $sql = "SELECT * FROM users";
        $result = mysqli_query($conn, $sql);
        echo "User List:<br>";
        while ($row = mysqli_fetch_assoc($result)) {
            echo "ID: " . $row['id'] . " - Username: " . $row['username'] . " - Email: " . $row['email'] . " ";
            echo '<a href="?action=edit&id=' . $row['id'] . '">Edit</a> | ';
            echo '<a href="?action=delete&id=' . $row['id'] . '" onclick="return confirm(\'Are you sure?\')">Delete</a><br>';
        }
        break;

    case 'insert':
        // Insert a new user
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $username = $_POST['username'];
            $password = $_POST['password'];
            $email = $_POST['email'];
            $sql = "INSERT INTO users (username, password, email) VALUES ('$username', '$password', '$email')";
            if (mysqli_query($conn, $sql)) {
                echo "User added successfully!";
            } else {
                echo "Error: " . mysqli_error($conn);
            }
        } else {
            // Display the insert form
            echo '<form method="POST" action="?action=insert">
                    Username: <input type="text" name="username"><br>
                    Password: <input type="password" name="password"><br>
                    Email: <input type="email" name="email"><br>
                    <input type="submit" value="Add User">
                  </form>';
        }
        break;

    case 'edit':
        // Edit an existing user
        $id = isset($_GET['id']) ? intval($_GET['id']) : 0;
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $username = $_POST['username'];
            $password = $_POST['password'];
            $email = $_POST['email'];
            $sql = "UPDATE users SET username='$username', password='$password', email='$email' WHERE id=$id";
            if (mysqli_query($conn, $sql)) {
                echo "User updated successfully!";
            } else {
                echo "Error: " . mysqli_error($conn);
            }
        } else {
            $sql = "SELECT * FROM users WHERE id=$id";
            $result = mysqli_query($conn, $sql);
            if ($row = mysqli_fetch_assoc($result)) {
                echo '<form method="POST" action="?action=edit&id=' . $row['id'] . '">
                        Username: <input type="text" name="username" value="' . $row['username'] . '"><br>
                        Password: <input type="password" name="password" value="' . $row['password'] . '"><br>
                        Email: <input type="email" name="email" value="' . $row['email'] . '"><br>
                        <input type="submit" value="Update User">
                      </form>';
            } else {
                echo "User not found.";
            }
        }
        break;

    case 'delete':
        // Delete a user
        $id = isset($_GET['id']) ? intval($_GET['id']) : 0;
        $sql = "DELETE FROM users WHERE id=$id";
        if (mysqli_query($conn, $sql)) {
            echo "User deleted successfully!";
        } else {
            echo "Error: " . mysqli_error($conn);
        }
        break;

    default:
        echo "Welcome to the User Management System!<br>";
        echo '<a href="?action=login">Login</a> | ';
        echo '<a href="?action=logout">Logout</a> | ';
        echo '<a href="?action=insert">Add User</a> | ';
        echo '<a href="?action=list">User List</a>';
        break;
}

mysqli_close($conn);
?>
