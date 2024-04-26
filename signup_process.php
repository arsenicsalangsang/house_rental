<?php
session_start();
include('./db_connect.php');

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $email = $_POST['email'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Validate form data
    if (empty($email) || empty($firstname) || empty($lastname) || empty($username) || empty($password)) {
        // Handle empty fields error
        echo "All fields are required.";
    } else {
        // Hash the password for better security
        $hashed_password = md5($password); // Note: Consider using stronger hashing algorithms like bcrypt

        // Prepare and bind parameters for the SQL statement to prevent SQL injection
        $stmt = $conn->prepare("INSERT INTO users (id, email, firstname, lastname, username, password) VALUES (NULL, ?, ?, ?, ?, ?)");
        $stmt->bind_param("sssss", $email, $firstname, $lastname, $username, $hashed_password);


        // Execute the prepared statement
        if ($stmt->execute()) {
            // Registration successful
            echo "Registration successful. You can now login.";
            // Redirect user to login page or any other page as needed
            // header("Location: login.php");
        } else {
            // Handle database error
            echo "Error: " . $conn->error;
        }

        // Close statement
        $stmt->close();
    }
} else {
    // Redirect user to signup page if accessed directly
    header("Location: signup.php");
}
