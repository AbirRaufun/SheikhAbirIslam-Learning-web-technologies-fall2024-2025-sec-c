<?php
    session_start();
    if(isset($_REQUEST['submit'])){
        
        $username = trim($_POST['username']);
        $password = trim($_REQUEST['password']);
        $email = trim($_REQUEST['email']);

        if($username == null || empty($password || empty($email))){
            echo "Null username/password/email!";
        }else {
            // Include database connection
            include('db.php');
            
            // Escape the user input to prevent SQL injection
            $username = mysqli_real_escape_string($conn, $username);
            $password = mysqli_real_escape_string($conn, $password);
            $email = mysqli_real_escape_string($conn, $email);

            // Insert user data into the database
            $sql = "INSERT INTO users (username, password, email) VALUES ('$username', '$password', '$email')";
            
            if (mysqli_query($conn, $sql)) {
                echo "Registration successful!<br>";
                echo '<a href="login.html">Login</a>';
            } else {
                echo "Error: " . mysqli_error($conn);
            }

            mysqli_close($conn);
        }
    } else {
        header('location: reg.html');
    }
?>
