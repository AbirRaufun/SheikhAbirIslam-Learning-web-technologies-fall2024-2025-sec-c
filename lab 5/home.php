<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['status']) || $_SESSION['status'] !== true) {
    header('Location: LOGIN.php'); // Redirect to registration if not logged in
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <h1>Welcome, <?php echo htmlspecialchars($_SESSION['username']); ?>!</h1>
    <a href="logout.php"><button>Logout</button></a> 
</body>
</html>
