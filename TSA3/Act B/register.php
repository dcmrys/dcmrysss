<!DOCTYPE html>
<html>

<head>
    <title>Register</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <h2>Create Account</h2>

        <form action="register_process.php" method="POST">
            <label>Full Name</label>
            <input type="text" name="fullname" placeholder="Example: Juan Dela Cruz" autocomplete="off" aria-label="Full Name" required>

            <label>Email</label>
            <input type="email" name="email" placeholder="Example: juan@email.com" autocomplete="off" aria-label="Email" required>

            <label>Username</label>
            <input type="text" name="username" autocomplete="off" aria-label="Username" required>

            <label>Password</label>
            <input type="password" name="password" autocomplete="new-password" aria-label="Password" required>

            <label>Confirm Password</label>
            <input type="password" name="confirm_password" autocomplete="new-password" aria-label="Confirm Password" required>

            <button type="submit">Register</button>
        </form>

        <div class="center auth-links">
            <a href="login.php">Login</a>
        </div>
    </div>
</body>

</html>
