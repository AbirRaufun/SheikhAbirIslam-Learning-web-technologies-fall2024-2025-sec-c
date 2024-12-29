<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Profile</title>
</head>
<body>
    <h2>User Profile</h2>

    <form action="/updateProfile" method="POST">
        <fieldset>
            <legend>Profile Information</legend>
            <label for="fullName">Full Name:</label>
            <input type="text" id="fullName" name="fullName" value="" required>
            <br><br>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" value="" required>
            <br><br>

            <label for="phone">Phone Number:</label>
            <input type="text" id="phone" name="phone" value="" required>
            <br><br>

            <label for="address">Address:</label>
            <input type="text" id="address" name="address" value="" required>
            <br><br>

            <label for="profilePicture">Profile Picture:</label>
            <input type="file" id="profilePicture" name="profilePicture">
            <br><br>

            <button type="submit">Update Profile</button>
        </fieldset>
    </form>

    <br>
    <a href="/dashboard">Back to Dashboard</a>
</body>
</html>
