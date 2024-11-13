<?php
session_start();
include '../dbconnect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $email = $_POST['email'];
    $password = $_POST['password'];

    //Hash password
    $hashedpassword = password_hash($password, PASSWORD_DEFAULT);

    //Simple query - modify according to your db 
    $query = "INSERT INTO users (email,password) VALUES (?,?)";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("ss", $email, $hashedpassword);

    if ($stmt->execute()) {
        // Redirect to homepage after successful sign-in
        header("Location: index.php");
        exit();
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>