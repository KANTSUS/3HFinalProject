<?php
session_start();


include('db_connection.php'); 

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $username = $_POST['username']; 

    
    $query = "INSERT INTO users (username, email, password) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("sss", $username, $email, $password);
    $stmt->execute();

    if ($stmt->affected_rows > 0) {
        
        $_SESSION['username'] = $username;
        header("Location: index.php"); 
        exit();
    } else {
        echo "Error creating account!";
    }
}
?>
