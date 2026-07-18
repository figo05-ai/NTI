<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Profile</title>
</head>
<body>
    <?php include 'navbar.php'; ?>
    <div style="text-align: center; margin-top: 50px;">
        <h1>Welcome, <?php echo htmlspecialchars($_SESSION['user_name']); ?></h1>
    </div>
</body>
</html>