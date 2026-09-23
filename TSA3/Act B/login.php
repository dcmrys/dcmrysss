<?php
session_start();

if (isset($_SESSION['username'])) {
    header("Location: dashboard.php");
    exit();
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <h2>Login</h2>

        <form action="login_process.php" method="POST">
            <input type="text" name="username" placeholder="Username" autocomplete="off" aria-label="Username" required>
            <input type="password" name="password" placeholder="Password" autocomplete="current-password" aria-label="Password" required>
            <button type="submit">Login</button>
        </form>

        <div class="center auth-links">
            <a href="register.php">Register</a>
        </div>
    </div>
</body>

</html>
