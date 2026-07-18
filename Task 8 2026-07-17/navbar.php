<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
?>
<style>
.navbar { 
    display: flex; 
    justify-content: flex-end; 
    padding: 15px; 
    background-color: #f8f9fa;
    border-bottom: 1px solid #ddd;
}
.navbar a, .navbar span { 
    margin: 0 10px; 
    text-decoration: none; 
    color: #333;
    font-family: Arial, sans-serif;
    font-weight: bold;
}
</style>
<div class="navbar">
    <?php if (isset($_SESSION['user_id'])): ?>
        <a href="logout.php">Logout</a>
        <span><?php echo htmlspecialchars($_SESSION['user_name']); ?></span>
    <?php else: ?>
        <a href="login.php">Login</a>
        <a href="register.php">Register</a>
    <?php endif; ?>
</div>