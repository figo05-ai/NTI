<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <style>
        body { font-family: Arial, sans-serif; text-align: center; margin-top: 50px; }
        a { text-decoration: none; padding: 10px 20px; background-color: #007bff; color: white; border-radius: 5px; margin: 5px; display: inline-block; }
        a:hover { background-color: #0056b3; }
    </style>
</head>
<body>
    <?php include 'navbar.php'; ?>

    <h1>Welcome to our Website</h1>
    <p>This is the home page (<code>index.php</code>).</p>
    
    <div style="margin-top: 30px;">
        <a href="login.php">Login</a>
        <a href="register.php">Create an Account</a>
    </div>
</body>
</html>
