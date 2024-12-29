<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>
</head>
<body>
    <h2>Forgot Password</h2>
    <form action="/sendCode" method="POST">
        <fieldset>
            <legend>Enter your registered email address</legend>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            <br><br>
            <button type="submit">Send Code</button>
        </fieldset>
    </form>

    <form action="/resetPassword" method="POST">
        <fieldset>
            <legend>Enter the code and new password</legend>
            <label for="code">Verification Code:</label>
            <input type="text" id="code" name="code" required>
            <br><br>
            <label for="newPassword">New Password:</label>
            <input type="password" id="newPassword" name="newPassword" required>
            <br><br>
            <label for="confirmPassword">Confirm New Password:</label>
            <input type="password" id="confirmPassword" name="confirmPassword" required>
            <br><br>
            <button type="submit">Submit</button>
        </fieldset>
    </form>
</body>
</html>
