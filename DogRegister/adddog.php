<?php

$conn = mysqli_connect("localhost","root","","dog_FA6");

if(isset($_POST['save']))
{
    $name = $_POST['name'];
    $breed = $_POST['breed'];
    $age = $_POST['age'];
    $address = $_POST['address'];
    $color = $_POST['color'];
    $height = $_POST['height'];
    $weight = $_POST['weight'];

    mysqli_query($conn,"INSERT INTO dogs(name,breed,age,address,color,height,weight)
    VALUES('$name','$breed','$age','$address','$color','$height','$weight')");

    echo "<script>alert('Dog information saved!');</script>";
}

?>

<!DOCTYPE html>
<html>
<head>
<title>Add Dog</title>

<style>

body{
    font-family:Century Gothic;
    background:#FFF7F0;
}

.container{
    width:400px;
    margin:auto;
    margin-top:30px;
    background:white;
    padding:25px;
    border-radius:20px;
    box-shadow:0px 0px 10px lightgray;
}

h1{
    text-align:center;
    color:#ff8fa3;
}

input{
    width:95%;
    padding:10px;
    margin-top:8px;
    margin-bottom:15px;
    border:1px solid lightgray;
    border-radius:10px;
}

button{
    width:100%;
    padding:12px;
    background:#ffd6e0;
    border:none;
    border-radius:15px;
    font-size:16px;
    font-family:Century Gothic;
}

button:hover{
    background:#ffb3c6;
}

a{
    text-decoration:none;
}

</style>
</head>

<body>

<div class="container">

<h1>🐶 Add Dog</h1>

<form method="post">

Name
<input type="text" name="name" required>

Breed
<input type="text" name="breed" required>

Age
<input type="number" name="age" required>

Address
<input type="text" name="address" required>

Color
<input type="text" name="color" required>

Height
<input type="text" name="height" required>

Weight
<input type="text" name="weight" required>

<button type="submit" name="save">Save</button>

</form>

<br>

<center>
<a href="menu.php"><- Back to Menu</a>
</center>

</div>

</body>
</html>