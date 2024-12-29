<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search & Filter Travel Packages</title>
</head>
<body>
    <h2>Search Travel Packages</h2>

    <form action="/searchPackages" method="GET">
        <fieldset>
            <legend>Filter Packages</legend>

            <label for="location">Location:</label>
            <input type="text" id="location" name="location" placeholder="Enter location">
            <br><br>

            <label for="price">Price Range:</label>
            <input type="number" id="minPrice" name="minPrice" placeholder="Min Price" step="0.01">
            <input type="number" id="maxPrice" name="maxPrice" placeholder="Max Price" step="0.01">
            <br><br>

            <label for="duration">Duration (days):</label>
            <input type="number" id="minDuration" name="minDuration" placeholder="Min Duration">
            <input type="number" id="maxDuration" name="maxDuration" placeholder="Max Duration">
            <br><br>

            <button type="submit">Search Packages</button>
        </fieldset>
    </form>

    <br>
    <a href="/dashboard">Back to Dashboard</a>
</body>
</html>
