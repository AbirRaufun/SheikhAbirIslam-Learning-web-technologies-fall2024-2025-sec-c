<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $errors = [];

    if (isset($_POST['form']) && $_POST['form'] == 'form1') { // Name 
        $name = $_POST['name'] ?? '';
        if (empty($name)) {
            $errors[] = "Name cannot be empty.";
        } else {
            $words = explode(' ', trim($name));
            if (count($words) < 2) {
                $errors[] = "Name must contain at least two words.";
            }
            if (!ctype_alpha($name[0])) {
                $errors[] = "Name must start with a letter.";
            }
            foreach (str_split($name) as $char) {
                if (!ctype_alpha($char) && $char != ' ' && $char != '.' && $char != '-') {
                    $errors[] = "Name can only contain letters, spaces, periods, and dashes.";
                    break;
                }
            }
        }
    } elseif (isset($_POST['form']) && $_POST['form'] == 'form2') { // Email 
        $email = $_POST['email'] ?? '';
        if (empty($email)) {
            $errors[] = "Email cannot be empty.";
        } elseif (strpos($email, '@') === false || strpos($email, '.') === false) {
            $errors[] = "Invalid email format. Must include '@' and '.'.";
        }
    } elseif (isset($_POST['form']) && $_POST['form'] == 'form3') { // Date 
        $date = $_POST['date'] ?? '';
        if (empty($date)) {
            $errors[] = "Date cannot be empty.";
        } else {
            $dateParts = explode('-', $date);
            if (count($dateParts) != 3) {
                $errors[] = "Invalid date format. Must be yyyy-mm-dd.";
            } else {
                $year = (int)$dateParts[0];
                $month = (int)$dateParts[1];
                $day = (int)$dateParts[2];

                if ($year < 1953 || $year > 1998) {
                    $errors[] = "Year must be between 1953 and 1998.";
                }
                if (!checkdate($month, $day, $year)) {
                    $errors[] = "The date is invalid.";
                }
            }
        }
    } elseif (isset($_POST['form']) && $_POST['form'] == 'form4') { // Gender 
        $gender = $_POST['gender'] ?? '';
        if (empty($gender)) {
            $errors[] = "Please select a gender.";
        }
    } elseif (isset($_POST['form']) && $_POST['form'] == 'form5') { // Degree 
        $options = $_POST['options'] ?? [];
        if (count($options) < 2) {
            $errors[] = "Please select at least two options.";
        }
    } elseif (isset($_POST['form']) && $_POST['form'] == 'form6') { // Blood Group 
        $bloodgroup = $_POST['bloodgroup'] ?? '';
        if (empty($bloodgroup)) {
            $errors[] = "Please select a blood group.";
        }
    } else {
        $errors[] = "Invalid form submission.";
    }

    // Display Errors or Success 
    if (!empty($errors)) {
        echo "<h3>Validation Errors:</h3>";
        echo "<ul>";
        foreach ($errors as $error) {
            echo "<li>$error</li>";
        }
        echo "</ul>";
    } else {
        echo "<h3>Validation successful!</h3>";
    }
}
?>
