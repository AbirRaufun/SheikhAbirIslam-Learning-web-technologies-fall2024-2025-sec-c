<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Travel Package Management</title>
</head>
<body>
    <h2>Travel Package Management</h2>
    
    <form action="/manage-packages" method="post">
        <fieldset>
            <legend>Add a New Travel Package</legend>
            
            <label for="packageName">Package Name:</label><br>
            <input type="text" id="packageName" name="packageName" placeholder="Enter package name" required><br><br>
            
            <label for="destination">Destination:</label><br>
            <input type="text" id="destination" name="destination" placeholder="Enter destination" required><br><br>
            
            <label for="price">Price (in Taka):</label><br>
            <input type="number" id="price" name="price" placeholder="Enter price" required><br><br>
            
            <label for="duration">Duration (Days):</label><br>
            <input type="number" id="duration" name="duration" placeholder="Enter duration in days" required><br><br>
            
            <label for="description">Package Description:</label><br>
            <textarea id="description" name="description" rows="4" cols="50" placeholder="Write details about the package" required></textarea><br><br>
            
            <button type="submit">Add Package</button>
        </fieldset>
    </form>
    
    <hr>
    
    <h3>Existing Travel Packages</h3>
    <table border="1" width="100%">
        <thead>
            <tr>
                <th>Package Name</th>
                <th>Destination</th>
                <th>Price (Taka)</th>
                <th>Duration (Days)</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Maldives Delight</td>
                <td>Maldives</td>
                <td>50000</td>
                <td>5</td>
                <td>
                    <button>Edit</button>
                    <button>Delete</button>
                </td>
            </tr>
            <tr>
                <td>Cox's Bazar Getaway</td>
                <td>Cox's Bazar</td>
                <td>15000</td>
                <td>3</td>
                <td>
                    <button>Edit</button>
                    <button>Delete</button>
                </td>
            </tr>
            <!-- Additional rows can be added dynamically from the database -->
        </tbody>
    </table>
</body>
</html>
