<?php

setcookie("name", "Maryclaire", time() + 60);
setcookie("age", "18", time() + 60);
setcookie("address", "Quezon City", time() + 60);

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (isset($_POST["expire"])) {
        setcookie("age", "", time() - 3600);
        setcookie("address", "", time() - 3600);

        header("Location: " . $_SERVER['PHP_SELF']);
        exit();
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Cookies Activity</title>

    <style>
        body{
            font-family: Arial, sans-serif;
            background:#f5f5f5;
            display:flex;
            justify-content:center;
            margin-top:80px;
        }

        .container{
            background:white;
            padding:25px;
            width:300px;
            border-radius:10px;
            box-shadow:0 0 10px rgba(0,0,0,0.1);
        }

        button{
            padding:10px;
            border:none;
            background:#333;
            color:white;
            border-radius:5px;
            cursor:pointer;
        }
    </style>
</head>
<body>

<div class="container">

    <h2>My Cookies</h2>

    <p><b>Name:</b> <?php echo $_COOKIE['name'] ?? "Not Available"; ?></p>

    <p><b>Age:</b> <?php echo $_COOKIE['age'] ?? "Expired"; ?></p>

    <p><b>Address:</b> <?php echo $_COOKIE['address'] ?? "Expired"; ?></p>

    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <button type="submit" name="expire">
            Expire Age & Address
        </button>
    </form>

</div>

</body>
</html>
