<?php
session_start();

if (!isset($_SESSION['fullname'])) {
    header("Location: login.php");
    exit();
}

$fullname = $_SESSION['fullname'];
?>
<!DOCTYPE html>
<html>
<body>
    <h1>Welcome, <?php echo htmlspecialchars($fullname); ?>!</h1>
    <p>This is your homepage.</p>
    <a href="logout.php">Log Out</a>
</body>
</html>
