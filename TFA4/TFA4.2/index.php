<!DOCTYPE html>
<html>
<head>
    <title>The Names</title>

    <style>

        body{
            font-family:Century Gothic;
            background:linear-gradient(to right, #fce4ec, #f8bbd0);
            margin:0;
            padding:40px;
        }

        h1{
            text-align:center;
            color:#880e4f;
            font-size:45px;
            margin-bottom:30px;
        }

        table{
            width:95%;
            margin:auto;
            border-collapse:collapse;
            background:white;
            border-radius:15px;
            overflow:hidden;
            box-shadow:0 5px 15px rgba(0,0,0,0.2);
        }

        th, td{
            padding:15px;
            text-align:center;
        }

        th{
            background:#d81b60;
            color:white;
            font-size:16px;
        }

        td{
            font-size:15px;
            color:#444;
        }

        tr:nth-child(even){
            background:#fce4ec;
        }

        tr:hover{
            background:#f8bbd0;
            transition:0.3s;
        }

    </style>
</head>
<body>

<h1>List of Names</h1>

<?php
$names = array(
    "maryclaire",
    "jashley",
    "padilla",
    "trina",
    "marielle",
    "viloria",
    "daryl",
    "joshua",
    "tapales",
    "medrano",
    "mark",
    "benedict",
    "castro",
    "nicole",
    "allen",
    "gutierrez",
    "aragon",
    "jovs",
    "francis",
    "caburao"
);
?>

<table>

<tr>
    <th>Name</th>
    <th>Number of Characters</th>
    <th>Uppercase First Character</th>
    <th>Replace Vowels with @</th>
    <th>Position of a</th>
    <th>Reverse Name</th>
</tr>

<?php
foreach($names as $name){

    $characters = strlen($name);
    $uppercase = ucwords($name);
    $replace = str_ireplace(array('a','e','i','o','u'),'@',$name);
    $position = stripos($name,'a');
    $reverse = strrev($name);

    echo "<tr>";
    echo "<td>$name</td>";
    echo "<td>$characters</td>";
    echo "<td>$uppercase</td>";
    echo "<td>$replace</td>";
    echo "<td>$position</td>";
    echo "<td>$reverse</td>";
    echo "</tr>";
}
?>

</table>

</body>
</html>