<!DOCTYPE html>
<html>
<head>
    <title>Multiplication Table</title>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">

    <style>
        body{
            font-family: Montserrat;
        }
        table{
            border-collapse: collapse;
            margin: auto;
        }
        td{
            width: 50px;
            height: 50px;
            text-align: center;
            border: 1px solid white;
        }
        .color1{
            background-color: #ffe5ccff;
        }
        .color2{
            background-color: #b6ad90ff;
        }
        h2{
            color: #666151ff;
        }
    </style>
</head>

<body>
<h2 align="center">Multiplication Table</h2>

<table>
<?php

for($row = 0; $row <= 10; $row++){

    echo "<tr>";
    for($col = 0; $col <= 10; $col++){
        $answer = $row * $col;
        if(($row + $col) % 2 == 0){
            $color = "color1";
        }
        else{
            $color = "color2";
        }

        echo "<td class='$color'>$answer</td>";
    }
    echo "</tr>";
}

?>
</table>

</body>
</html>