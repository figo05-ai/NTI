<?php
require 'db.php';
session_start();

if (isset($_SESSION['user_id'])) {
    header("Location: profile.php");
    exit();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $conn->real_escape_string($_POST['email']);
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE email='$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        
        if (password_verify($password, $user['password'])) {
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['user_name'] = $user['name'];
            header("Location: profile.php");
            exit();
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>
    <?php include 'navbar.php'; ?>
    <div style="text-align: center; margin-top: 50px;">
        <h2>Login</h2>
        <form method="POST">
            <input type="email" name="email" required placeholder="Email"><br><br>
            <input type="password" name="password" required placeholder="Password"><br><br>
            <button type="submit">Login</button>
        </form>
    </div>
</body>
</html>