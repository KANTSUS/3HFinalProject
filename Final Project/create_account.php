<?php
session_start();

// Assuming you have a connection to the database
include('db_connection.php'); // Replace with your database connection code

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $username = $_POST['username']; // Collect the username during account creation

    // Insert new user into the database
    $query = "INSERT INTO users (username, email, password) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("sss", $username, $email, $password);
    $stmt->execute();

    if ($stmt->affected_rows > 0) {
        // Account created successfully, store username in session
        $_SESSION['username'] = $username;
        header("Location: index.php"); // Redirect to the homepage or dashboard
        exit();
    } else {
        echo "Error creating account!";
    }
}
?>
