<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
</head>
<body>

    <h2>Contact Us</h2>

    <!-- Contact Form -->
    <div>
        <h3>We'd Love to Hear From You</h3>
        <form action="/submitContact" method="post">
            <fieldset>
                <legend>Contact Form</legend>
                
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required><br><br>

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required><br><br>

                <label for="subject">Subject:</label>
                <input type="text" id="subject" name="subject" required><br><br>

                <label for="message">Message:</label><br>
                <textarea id="message" name="message" rows="5" cols="50" required></textarea><br><br>

                <button type="submit">Submit</button>
            </fieldset>
        </form>
    </div>

    <hr>

    <!-- Contact Information -->
    <div>
        <h3>Our Contact Information</h3>
        <p><strong>Phone:</strong> +1 234 567 890</p>
        <p><strong>Email:</strong> support@travelwebsite.com</p>
        <p><strong>Address:</strong> 123 Travel Street, Dream City, Wonderland</p>
    </div>

</body>
</html>
