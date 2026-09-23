<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Home</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>

<body>

    <div class="container">

        <h2>Welcome!</h2>

        <h3 style="text-align:center;">
            <?php echo htmlspecialchars($_SESSION['username']); ?>
        </h3>

        <br>

        <center>
            <a href="logout.php">Logout</a>
        </center>

    </div>

</body>

</html>
