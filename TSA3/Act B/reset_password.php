<?php
session_start();

if (!isset($_SESSION['id'])) {
    header("Location: login.php");
    exit();
}

$message = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $conn = new mysqli("localhost", "root", "", "registration_system");

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $conn->set_charset("utf8mb4");

    $currentPassword = $_POST["current_password"] ?? "";
    $newPassword = $_POST["new_password"] ?? "";
    $confirmPassword = $_POST["confirm_password"] ?? "";

    if ($currentPassword === "" || $newPassword === "" || $confirmPassword === "") {
        $message = "Please fill out all password fields.";
    } elseif ($newPassword !== $confirmPassword) {
        $message = "New password and confirm password do not match.";
    } else {
        $stmt = $conn->prepare("SELECT password FROM users WHERE id = ? LIMIT 1");
        $stmt->bind_param("i", $_SESSION['id']);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows === 1) {
            $user = $result->fetch_assoc();

            if (password_verify($currentPassword, $user['password'])) {
                $hashedPassword = password_hash($newPassword, PASSWORD_DEFAULT);
                $update = $conn->prepare("UPDATE users SET password = ? WHERE id = ?");
                $update->bind_param("si", $hashedPassword, $_SESSION['id']);
                $update->execute();

                echo "<script>
                        alert('Password changed successfully!');
                        window.location='dashboard.php';
                      </script>";
                exit();
            } else {
                $message = "Current password is incorrect.";
            }
        } else {
            $message = "Unable to locate your account.";
        }
    }

    $conn->close();
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Change Password</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <h2>Change Password</h2>

        <?php if ($message !== ""): ?>
            <div class="error">
                <?php echo htmlspecialchars($message); ?>
            </div>
        <?php endif; ?>

        <form action="reset_password.php" method="POST">
            <input type="password" name="current_password" placeholder="Current Password" autocomplete="current-password" aria-label="Current Password" required>
            <input type="password" name="new_password" placeholder="New Password" autocomplete="new-password" aria-label="New Password" required>
            <input type="password" name="confirm_password" placeholder="Confirm Password" autocomplete="new-password" aria-label="Confirm Password" required>
            <button type="submit">Change Password</button>
        </form>

        <div class="center">
            <a href="dashboard.php">Back to Dashboard</a>
        </div>
    </div>
</body>

</html>
