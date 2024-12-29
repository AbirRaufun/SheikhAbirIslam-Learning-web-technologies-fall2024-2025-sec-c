<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin User Management</title>
</head>
<body>

    <h2>Admin User Management</h2>

    <!-- User Management Table -->
    <div>
        <h3>Manage Users</h3>
        <table border="1" cellspacing="0" cellpadding="10">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Abir</td>
                    <td>aa@gmail.com</td>
                    <td>Admin</td>
                    <td>
                        <button onclick="editUser(1)">Edit</button>
                        <button onclick="deleteUser(1)">Delete</button>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Eshika</td>
                    <td>Doreamon@gmail.com</td>
                    <td>User</td>
                    <td>
                        <button onclick="editUser(2)">Edit</button>
                        <button onclick="deleteUser(2)">Delete</button>
                    </td>
                </tr>
                <!-- Additional users can be listed here -->
            </tbody>
        </table>
    </div>

    <hr>

    <!-- Add User Form -->
    <div>
        <h3>Add New User</h3>
        <form action="/addUser" method="post">
            <fieldset>
                <legend>Add User Form</legend>
                
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required><br><br>

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required><br><br>

                <label for="role">Role:</label>
                <select id="role" name="role" required>
                    <option value="Admin">Admin</option>
                    <option value="User">User</option>
                </select><br><br>

                <button type="submit">Add User</button>
            </fieldset>
        </form>
    </div>

    <hr>

    <!-- Update User Form -->
    <div id="updateUserForm" style="display:none;">
        <h3>Update User Information</h3>
        <form action="/updateUser" method="post">
            <fieldset>
                <legend>Update User</legend>
                
                <label for="editName">Name:</label>
                <input type="text" id="editName" name="editName" required><br><br>

                <label for="editEmail">Email:</label>
                <input type="email" id="editEmail" name="editEmail" required><br><br>

                <label for="editRole">Role:</label>
                <select id="editRole" name="editRole" required>
                    <option value="Admin">Admin</option>
                    <option value="User">User</option>
                </select><br><br>

                <button type="submit">Update User</button>
                <button type="button" onclick="closeUpdateForm()">Cancel</button>
            </fieldset>
        </form>
    </div>

    <script>
        function editUser(userId) {
            // Fetch user details and populate the form (dummy example)
            if (userId === 1) {
                document.getElementById("editName").value = "Abir";
                document.getElementById("editEmail").value = "Psychopath@gmail.com";
                document.getElementById("editRole").value = "Admin";
            } else if (userId === 2) {
                document.getElementById("editName").value = "Eshika";
                document.getElementById("editEmail").value = "EE@gmail.com.com";
                document.getElementById("editRole").value = "User";
            }
            
            // Show the update form
            document.getElementById("updateUserForm").style.display = "block";
        }

        function closeUpdateForm() {
            // Hide the update form
            document.getElementById("updateUserForm").style.display = "none";
        }

        function deleteUser(userId) {
            // Example delete function (this would be handled on the server side)
            alert("User with ID " + userId + " has been deleted.");
        }
    </script>

</body>
</html>
