<?php
$conn = mysqli_connect("localhost","root","","dog_FA6");

$result = mysqli_query($conn,"SELECT * FROM dogs");
?>

<!DOCTYPE html>
<html>
<head>
<title>Dog List</title>

<style>

body{
    font-family:Century Gothic;
    background:#FFF7F0;
}

.container{
    width:90%;
    margin:auto;
    margin-top:30px;
    background:white;
    padding:20px;
    border-radius:20px;
    box-shadow:0px 0px 10px lightgray;
}

h1{
    text-align:center;
    color:#ff8fa3;
}

table{
    width:100%;
    border-collapse:collapse;
}

th{
    background:#ffd6e0;
    padding:12px;
}

td{
    padding:10px;
    text-align:center;
    border-bottom:1px solid #eee;
}

a{
    text-decoration:none;
}

</style>
</head>
<body>

<div class="container">

<h1>🐶 List of Dogs</h1>

<table>

<tr>
<th>ID</th>
<th>Name</th>
<th>Breed</th>
<th>Age</th>
<th>Address</th>
<th>Color</th>
<th>Height</th>
<th>Weight</th>
</tr>

<?php

while($row = mysqli_fetch_assoc($result))
{
?>

<tr>
<td><?php echo $row['id']; ?></td>
<td><?php echo $row['name']; ?></td>
<td><?php echo $row['breed']; ?></td>
<td><?php echo $row['age']; ?></td>
<td><?php echo $row['address']; ?></td>
<td><?php echo $row['color']; ?></td>
<td><?php echo $row['height']; ?></td>
<td><?php echo $row['weight']; ?></td>
</tr>

<?php
}
?>

</table>

<br>

<center>
<a href="menu.php"><- Back to Menu</a>
</center>

</div>

</body>
</html>