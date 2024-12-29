<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Newsletter Subscription</title>
</head>
<body>
    <h2>Subscribe to Our Newsletter</h2>
    
    <form action="/subscribe" method="post">
        <fieldset>
            <legend>Stay Updated!</legend>
            
            <label for="name">Full Name:</label><br>
            <input type="text" id="name" name="name" placeholder="Enter your name" required><br><br>
            
            <label for="email">Email Address:</label><br>
            <input type="email" id="email" name="email" placeholder="Enter your email" required><br><br>
            
            <label for="preferences">Select Your Interests:</label><br>
            <select id="preferences" name="preferences" required>
                <option value="travel">Travel</option>
                <option value="technology">Technology</option>
                <option value="health">Health</option>
                <option value="business">Business</option>
                <option value="entertainment">Entertainment</option>
            </select><br><br>
            
            <input type="checkbox" id="terms" name="terms" required>
            <label for="terms">I agree to receive newsletters and promotional emails.</label><br><br>
            
            <button type="submit">Subscribe Now</button>
        </fieldset>
    </form>
</body>
</html>
