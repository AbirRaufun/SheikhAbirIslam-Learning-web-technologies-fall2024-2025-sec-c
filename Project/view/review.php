<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel Package Reviews</title>
</head>
<body>

    <h2>Travel Package Reviews</h2>

    <!-- Review Submission Form -->
    <div>
        <h3>Write a Review</h3>
        <form action="/submitReview" method="post">
            <fieldset>
                <legend>Your Review</legend>
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required><br><br>

                <label for="rating">Rating:</label>
                <select id="rating" name="rating" required>
                    <option value="1">1 Star</option>
                    <option value="2">2 Stars</option>
                    <option value="3">3 Stars</option>
                    <option value="4">4 Stars</option>
                    <option value="5">5 Stars</option>
                </select><br><br>

                <label for="review">Review:</label><br>
                <textarea id="review" name="review" rows="4" cols="50" required></textarea><br><br>

                <button type="submit">Submit Review</button>
            </fieldset>
        </form>
    </div>

    <hr>

    <!-- Display Existing Reviews -->
    <div>
        <h3>Customer Reviews</h3>

        <!-- Example review -->
        <div class="review">
            <p><strong>Eshika</strong> - <em>Rating: 5 Stars</em></p>
            <p><strong>Review:</strong> This Maldives trip was an unforgettable experience! Everything was perfect, from the accommodation to the beautiful beaches. Highly recommend this package!</p>
        </div>

        <div class="review">
            <p><strong>sammo</strong> - <em>Rating: 4 Stars</em></p>
            <p><strong>Review:</strong> Cox's Bazar is stunning. The beach was beautiful, and the food was great. The only downside was the long drive to get there, but overall a great experience.</p>
        </div>

        <!-- More reviews can be dynamically added here -->
    </div>

</body>
</html>
