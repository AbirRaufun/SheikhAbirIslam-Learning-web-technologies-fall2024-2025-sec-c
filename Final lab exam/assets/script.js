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
