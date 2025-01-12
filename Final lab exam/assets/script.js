document.getElementById('action').addEventListener('change', function() {
    var action = this.value;

    // Hide all fields first
    document.querySelectorAll('.formFields').forEach(function(field) {
        field.style.display = 'none';
    });

    // Show the appropriate fields based on selected action
    if (action === 'register') {
        document.getElementById('registerFields').style.display = 'block';
    } else if (action === 'update') {
        document.getElementById('updateFields').style.display = 'block';
    } else if (action === 'delete') {
        document.getElementById('deleteFields').style.display = 'block';
    } else if (action === 'search') {
        document.getElementById('searchFields').style.display = 'block';
    }
});

// AJAX function for searching employer
document.getElementById('username').addEventListener('input', function(e) {
    var username = document.getElementById('username').value;

    if (username.length > 0) {
        var xhr = new XMLHttpRequest();
        xhr.open("POST", "searchEmployer.php", true);
        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

        // Send the search request to the server with the username
        xhr.send("username=" + username);

        // Once the server responds, update the search result section
        xhr.onload = function() {
            if (xhr.status === 200) {
                document.getElementById('searchResult').innerHTML = xhr.responseText;
            } else {
                document.getElementById('searchResult').innerHTML = "Error occurred while searching.";
            }
        };
    } else {
        document.getElementById('searchResult').innerHTML = "";
    }
});

// AJAX for Update and Delete functionality
document.getElementById('updateFields').addEventListener('submit', function(e) {
    e.preventDefault();

    var username = document.getElementById('username').value;
    var employerName = document.getElementById('employerName').value;
    var companyName = document.getElementById('companyName').value;
    var contactNo = document.getElementById('contactNo').value;

    if (username && employerName && companyName && contactNo) {
        var xhr = new XMLHttpRequest();
        xhr.open("POST", "index.php", true);
        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

        var data = `action=update&username=${username}&employerName=${employerName}&companyName=${companyName}&contactNo=${contactNo}`;

        xhr.send(data);

        xhr.onload = function() {
            if (xhr.status === 200) {
                alert(xhr.responseText);
            } else {
                alert("Error while updating");
            }
        };
    } else {
        alert("All fields are required.");
    }
});

// AJAX for Delete functionality
document.getElementById('deleteFields').addEventListener('submit', function(e) {
    e.preventDefault();

    var username = document.getElementById('username').value;

    if (username) {
        var xhr = new XMLHttpRequest();
        xhr.open("POST", "index.php", true);
        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

        var data = `action=delete&username=${username}`;

        xhr.send(data);

        xhr.onload = function() {
            if (xhr.status === 200) {
                alert(xhr.responseText);
            } else {
                alert("Error while deleting");
            }
        };
    } else {
        alert("Username is required.");
    }
});
