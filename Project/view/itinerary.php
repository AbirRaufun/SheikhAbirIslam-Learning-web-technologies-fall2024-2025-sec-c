<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Itinerary Page</title>
</head>
<body>
    <h2>My Travel Itinerary</h2>

    <fieldset>
        <legend>Upcoming Trips</legend>
        <div>
            <h3>Maldives Vacation</h3>
            <p><strong>Date:</strong> 15th Jan 2024 - 20th Jan 2024</p>
            <p><strong>Activities:</strong> Beach tours, snorkeling, and luxury resort stay.</p>
            <p><strong>Status:</strong> Confirmed</p>
            <button>Edit</button>
            <button>Delete</button>
        </div>

        <div>
            <h3>Cox's Bazar Getaway</h3>
            <p><strong>Date:</strong> 5th Feb 2024 - 10th Feb 2024</p>
            <p><strong>Activities:</strong> Beach walks, seafood dining, and local sightseeing.</p>
            <p><strong>Status:</strong> Pending</p>
            <button>Edit</button>
            <button>Delete</button>
        </div>
    </fieldset>

    <fieldset>
        <legend>Add New Trip</legend>
        <form action="#" method="post">
            <label for="destination">Destination:</label>
            <input type="text" id="destination" name="destination" required><br><br>

            <label for="start-date">Start Date:</label>
            <input type="date" id="start-date" name="start-date" required><br><br>

            <label for="end-date">End Date:</label>
            <input type="date" id="end-date" name="end-date" required><br><br>

            <label for="activities">Activities:</label>
            <textarea id="activities" name="activities" rows="3" required></textarea><br><br>

            <button type="submit">Add Trip</button>
        </form>
    </fieldset>
</body>
</html>
