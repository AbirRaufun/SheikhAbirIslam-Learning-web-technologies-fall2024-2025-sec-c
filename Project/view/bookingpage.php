<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking & Reservation</title>
</head>
<body>
    <h2>Booking & Reservation System</h2>

    <h3>Select Your Travel Package</h3>
    
    <form action="/confirmBooking" method="POST">
        <fieldset>
            <legend>Booking Details</legend>

            <label for="package">Select Package:</label>
            <select id="package" name="package" required>
                <option value="package1">Beach Holiday</option>
                <option value="package2">Mountain Adventure</option>
                <option value="package3">Cultural Tour</option>
            </select>
            <br><br>

            <label for="startDate">Start Date:</label>
            <input type="date" id="startDate" name="startDate" required>
            <br><br>

            <label for="endDate">End Date:</label>
            <input type="date" id="endDate" name="endDate" required>
            <br><br>

            <label for="guests">Number of Guests:</label>
            <input type="number" id="guests" name="guests" min="1" required>
            <br><br>

            <button type="submit">Confirm Booking</button>
        </fieldset>
    </form>

    <br>
    <a href="/dashboard">Back to Dashboard</a>
</body>
</html>
