<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome - User Homepage</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f7fc;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 60%;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        h1 {
            color: #333;
        }
        .welcome-message {
            font-size: 20px;
            color: #555;
            margin-bottom: 30px;
        }
        .nav-buttons {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin-bottom: 30px;
        }
        .nav-buttons a {
            text-decoration: none;
            background-color: #4CAF50;
            color: white;
            padding: 12px 30px;
            border-radius: 5px;
            font-size: 16px;
        }
        .nav-buttons a:hover {
            background-color: #45a049;
        }
        .logout-button {
            background-color: #f44336;
        }
        .logout-button:hover {
            background-color: #e53935;
        }
        .footer {
            margin-top: 40px;
            font-size: 14px;
            color: #888;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Welcome, Abir!</h1>
        <p class="welcome-message">You are now logged in. What would you like to do next?</p>
        
        <div class="nav-buttons">
            <a href="/view-profile">View Profile</a>
            <a href="/book-travel-package">Book a Travel Package</a>
            <a href="/view-itinerary">View Itinerary</a>
        </div>

        <a href="/logout" class="logout-button">Logout</a>

        <div class="footer">
            <p>&copy; 2024 Travel Agency. All Rights Reserved.</p>
        </div>
    </div>
</body>
</html>
