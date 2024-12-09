<?php
session_start();


include('db_connection.php'); 

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    
    $query = "SELECT * FROM users WHERE email = ? AND password = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("ss", $email, $password);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        
        $user = $result->fetch_assoc();
        $_SESSION['username'] = $user['username']; 
        header("Location: index.php"); 
        exit();
    } else {
        echo "Invalid login credentials!";
    }
}
?>
