<?php
require 'db.php';
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $conn->real_escape_string($_POST['name']);
    $email = $conn->real_escape_string($_POST['email']);
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $sql = "INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$password')";
    
    if ($conn->query($sql) === TRUE) {
        header("Location: login.php");
        exit();
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register</title>
</head>
<body>
    <?php include 'navbar.php'; ?>
    <div style="text-align: center; margin-top: 50px;">
        <h2>Create Account</h2>
        <form method="POST">
            <input type="text" name="name" required placeholder="Name"><br><br>
            <input type="email" name="email" required placeholder="Email"><br><br>
            <input type="password" name="password" required placeholder="Password"><br><br>
            <button type="submit">Register</button>
        </form>
    </div>
</body>
</html>