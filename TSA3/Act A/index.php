<?php
session_start();

if (isset($_SESSION['username'])) {
    header("Location: home.php");
    exit();
}

$staticUser = "admin";
$staticPass = "12345";
$usersFile = __DIR__ . "/users.json";
$error = "";

$savedUsername = isset($_COOKIE['remember_username']) ? $_COOKIE['remember_username'] : "";
$savedPassword = isset($_COOKIE['remember_password']) ? $_COOKIE['remember_password'] : "";

if (isset($_COOKIE['username'])) {
    setcookie("username", "", time() - 3600);
}

if (isset($_COOKIE['password'])) {
    setcookie("password", "", time() - 3600);
}

if (isset($_POST['login'])) {
    $username = trim($_POST['username']);
    $password = $_POST['password'];

    if (isset($_POST['remember'])) {
        setcookie("remember_username", $username, time() + 3600);
        setcookie("remember_password", $password, time() + 3600);

        $savedUsername = $username;
        $savedPassword = $password;
    } else {
        setcookie("remember_username", "", time() - 3600);
        setcookie("remember_password", "", time() - 3600);

        $savedUsername = "";
        $savedPassword = "";
    }

    $isValidUser = false;

    if ($username == $staticUser && $password == $staticPass) {
        $isValidUser = true;
    } elseif (file_exists($usersFile)) {
        $users = json_decode(file_get_contents($usersFile), true);

        if (is_array($users)) {
            foreach ($users as $user) {
                if ($user['username'] == $username && password_verify($password, $user['password'])) {
                    $isValidUser = true;
                    break;
                }
            }
        }
    }

    if ($isValidUser) {
        $_SESSION['username'] = $username;

        header("Location: home.php");
        exit();
    } else {
        $error = "Invalid Username or Password.";
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>

<body>

    <div class="container">

        <h2>Login</h2>

        <form class="login-form" method="POST" autocomplete="off">

            <input type="text" name="username" placeholder="Username" value="<?php echo htmlspecialchars($savedUsername); ?>" autocomplete="off" aria-label="Username" required>

            <input type="password" name="password" placeholder="Password" value="<?php echo htmlspecialchars($savedPassword); ?>" autocomplete="off" aria-label="Password" required>

            <div class="checkbox">
                <input type="checkbox" name="remember" <?php if ($savedUsername != "" || $savedPassword != "") { echo "checked"; } ?>>
                Remember Me
            </div>

            <input type="submit" name="login" value="Login">

        </form>

        <?php if ($error != "") { ?>
            <div class="error"><?php echo $error; ?></div>
        <?php } ?>

        <br>

        <center>
            <a href="register.php">Create Account</a>
        </center>

    </div>

</body>

</html>
