<?php
$conn = new mysqli("localhost", "root", "", "registration_system");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$conn->set_charset("utf8mb4");

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header("Location: register.php");
    exit();
}

$fullname = trim($_POST['fullname']);
$email = trim($_POST['email']);
$username = trim($_POST['username']);
$password = $_POST['password'];
$confirm_password = $_POST['confirm_password'];

if ($fullname === "" || $email === "" || $username === "" || $password === "") {
    echo "<script>
            alert('Please fill out all fields.');
            window.location='register.php';
          </script>";
    exit();
}

if ($password !== $confirm_password) {
    echo "<script>
            alert('Password and Confirm Password are not the same.');
            window.location='register.php';
          </script>";
    exit();
}

$check = $conn->prepare("SELECT id FROM users WHERE username = ? OR email = ?");
$check->bind_param("ss", $username, $email);
$check->execute();
$result = $check->get_result();

if ($result->num_rows > 0) {
    echo "<script>
            alert('Username or Email already exists.');
            window.location='register.php';
          </script>";
    exit();
}

$hashedPassword = password_hash($password, PASSWORD_DEFAULT);

$stmt = $conn->prepare("INSERT INTO users(fullname,email,username,password) VALUES(?,?,?,?)");
$stmt->bind_param("ssss", $fullname, $email, $username, $hashedPassword);

if($stmt->execute()){
    echo "<script>
            alert('Registration Successful!');
            window.location='login.php';
          </script>";
}else{
    echo "Registration Failed.";
}

$conn->close();
?>
