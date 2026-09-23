<?php
session_start();

$usersFile = __DIR__ . "/users.json";
$error = "";
$success = "";
$registeredUser = null;

if (isset($_POST['submit'])) {
    $fname = trim($_POST['fname']);
    $lname = trim($_POST['lname']);
    $email = trim($_POST['email']);
    $username = trim($_POST['username']);
    $password = $_POST['password'];
    $confirm = $_POST['confirm'];

    if ($fname == "" || $lname == "" || $email == "" || $username == "" || $password == "" || $confirm == "") {
        $error = "Please fill in all fields.";
    } elseif ($password != $confirm) {
        $error = "Passwords do not match.";
    } else {
        $users = [];

        if (file_exists($usersFile)) {
            $savedUsers = json_decode(file_get_contents($usersFile), true);

            if (is_array($savedUsers)) {
                $users = $savedUsers;
            }
        }

        $usernameExists = false;

        foreach ($users as $user) {
            if (strtolower($user['username']) == strtolower($username)) {
                $usernameExists = true;
                break;
            }
        }

        if ($usernameExists) {
            $error = "Username already exists.";
        } else {
            $newUser = [
                "fname" => $fname,
                "lname" => $lname,
                "email" => $email,
                "username" => $username,
                "password" => password_hash($password, PASSWORD_DEFAULT)
            ];

            $users[] = $newUser;

            file_put_contents($usersFile, json_encode($users, JSON_PRETTY_PRINT));

            $success = "Account created successfully. You can now login.";

            $registeredUser = [
                "First Name" => $fname,
                "Last Name" => $lname,
                "Email" => $email,
                "Username" => $username
            ];

            $fname = "";
            $lname = "";
            $email = "";
            $username = "";
            $password = "";
            $confirm = "";
        }
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Registration</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>

<body>

    <div class="container register-container <?php if ($registeredUser != null) { echo "has-details"; } ?>">

        <h2>Create Account</h2>

        <div class="register-content">
            <div class="form-column">

                <form method="POST" autocomplete="off">

                    <label>First Name</label>
                    <input type="text" name="fname" placeholder="Example: Juan" value="<?php echo isset($fname) ? htmlspecialchars($fname) : ""; ?>" autocomplete="off" required>

                    <label>Last Name</label>
                    <input type="text" name="lname" placeholder="Example: Dela Cruz" value="<?php echo isset($lname) ? htmlspecialchars($lname) : ""; ?>" autocomplete="off" required>

                    <label>Email</label>
                    <input type="email" name="email" placeholder="Example: juan@email.com" value="<?php echo isset($email) ? htmlspecialchars($email) : ""; ?>" autocomplete="off" required>

                    <label>Username</label>
                    <input type="text" name="username" value="<?php echo isset($username) ? htmlspecialchars($username) : ""; ?>" autocomplete="off" required>

                    <label>Password</label>
                    <input type="password" name="password" autocomplete="new-password" required>

                    <label>Confirm Password</label>
                    <input type="password" name="confirm" autocomplete="new-password" required>

                    <input type="submit" name="submit" value="Register">

                </form>

                <?php if ($error != "") { ?>
                    <div class="error"><?php echo $error; ?></div>
                <?php } ?>

                <?php if ($success != "") { ?>
                    <div class="success"><?php echo $success; ?></div>
                <?php } ?>

            </div>

            <?php if ($registeredUser != null) { ?>
                <table class="details-table">
                    <tr>
                        <th colspan="2">Account Details</th>
                    </tr>

                    <?php foreach ($registeredUser as $label => $value) { ?>
                        <tr>
                            <td><?php echo htmlspecialchars($label); ?></td>
                            <td><?php echo htmlspecialchars($value); ?></td>
                        </tr>
                    <?php } ?>
                </table>
            <?php } ?>
        </div>

        <br>

        <center>
            <a href="index.php">Already have an account?</a>
        </center>

    </div>

</body>

</html>
