<?php
session_start();

// Assuming you have a connection to the database
include('db_connection.php'); // Replace with your database connection code

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Check the database for matching email and password
    $query = "SELECT * FROM users WHERE email = ? AND password = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("ss", $email, $password);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // User found, start session and store username
        $user = $result->fetch_assoc();
        $_SESSION['username'] = $user['username']; // Store username in session
        header("Location: index.php"); // Redirect to the homepage or dashboard
        exit();
    } else {
        echo "Invalid login credentials!";
    }
}
?>
