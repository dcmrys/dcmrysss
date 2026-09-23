<!DOCTYPE html>
<html>
<head>
    <title>Volume of Shapes</title>

    <style>
        body{
            font-family: Century Gothic;
            background-color: #f4f4f4;
            margin: 20px;
        }

        h1{
            text-align: center;
            color: #333;
        }

        table{
            width: 70%;
            margin: auto;
            border-collapse: collapse;
            background: white;
            box-shadow: 0px 0px 10px gray;
        }

        th, td{
            border: 1px solid #999;
            padding: 15px;
            text-align: center;
        }

        th{
            background-color: #2e3063;
            color: white;
        }

        tr:hover{
            background-color: #f1f1f1;
        }
    </style>
</head>

<body>

<h1>Volume of Shapes</h1>

<?php

function cube($s){
    return $s * $s * $s;
}

function rectangularPrism($l, $w, $h){
    return $l * $w * $h;
}

function cylinder($r, $h){
    return 3.14 * $r * $r * $h;
}

function cone($r, $h){
    return (3.14 * $r * $r * $h) / 3;
}

function sphere($r){
    return (4/3) * 3.14 * $r * $r * $r;
}

?>

<table>

    <tr>
        <th>Shape</th>
        <th>Formula</th>
        <th>Values</th>
        <th>Answer</th>
    </tr>

    <tr>
        <td>Cube</td>
        <td>V = s³</td>
        <td>s = 5</td>
        <td><?php echo cube(5); ?></td>
    </tr>

    <tr>
        <td>Right Rectangular Prism</td>
        <td>V = l × w × h</td>
        <td>l = 4, w = 3, h = 2</td>
        <td><?php echo rectangularPrism(4,3,2); ?></td>
    </tr>

    <tr>
        <td>Cylinder</td>
        <td>V = πr²h</td>
        <td>r = 3, h = 5</td>
        <td><?php echo cylinder(3,5); ?></td>
    </tr>

    <tr>
        <td>Cone</td>
        <td>V = 1/3 πr²h</td>
        <td>r = 3, h = 6</td>
        <td><?php echo cone(3,6); ?></td>
    </tr>

    <tr>
        <td>Sphere</td>
        <td>V = 4/3 πr³</td>
        <td>r = 4</td>
        <td><?php echo sphere(4); ?></td>
    </tr>

</table>

</body>
</html>