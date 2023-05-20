<?php
// Include the database connection file
require_once "databaseconn.php";

if (isset($_POST["submit"])) {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $url = $_POST["url"];
    $age = $_POST["age"];
    $phone = $_POST["phone"];
    $country = $_POST["country"];
    $password = $_POST["password"];
    $confirm_password = $_POST["confirm_password"];

    //Hash the password
    $passwordHash = password_hash($password, PASSWORD_DEFAULT);

    // Initialize an empty errors array
    $errors = array();

    // Check if the email already exists in the database
    $sql = "SELECT * FROM accounts WHERE email = '$email'";
    $result = mysqli_query($conn, $sql);
    $rowCount = mysqli_num_rows($result);
    if ($rowCount > 0) {
        // Add an error message to the errors array
        array_push($errors, "Email already exists!");
    }

    // Check if the password and confirmation password match
    if ($password != $confirm_password) {
        // Add an error message to the errors array
        array_push($errors, "Password mismatch!");
    }

    if (count($errors) > 0) {
        // Display error messages
        foreach ($errors as $error) {
            echo "<div class='alert alert-danger'>$error</div>";
        }
    } else {
        // Insert the new user into the database
        $sql = "INSERT INTO accounts (name, email, url, age, phone, country, password) VALUES (?, ?, ?, ?, ?, ?, ?)";//"?" are placeholder in sql used for security
        $stmt = mysqli_stmt_init($conn);// create a new MySQL statement object
        if (mysqli_stmt_prepare($stmt, $sql)) {//prepare the MySQL statement object for execution
            mysqli_stmt_bind_param($stmt, "sssssss", $name, $email, $url, $age, $phone, $country, $passwordHash);//used to bind the values of the user's data to the placeholders in the SQL query
            mysqli_stmt_execute($stmt);// execute the SQL query 
            echo "<div class='alert alert-success'>You are registered successfully.</div>";
        } else {
            echo "<div class='alert alert-danger'>Something went wrong.</div>";
        }
    }
}
?>
