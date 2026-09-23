<!DOCTYPE html>
<html>
<head>
    <title>v10-Digit Calculator </title>
    <style>
        body {
            font-family: "Century Gothic", Arial, sans-serif;
            background-color: #f0f2f5;
            text-align: center;
        }

        .box {
            width: 420px;
            margin: 60px auto;
            background-color: white;
            padding: 30px;
            border: 1px solid #ccc;
        }

        h2 {
            margin-bottom: 15px;
        }

        .array {
            background-color: #fafafa;
            padding: 10px;
            border: 1px solid #ddd;
            margin-bottom: 15px;
        }

        .result {
            text-align: left;
        }

        .row {
            padding: 8px;
            border-bottom: 1px solid #eee;
        }

        .label {
            font-weight: bold;
        }

        .value {
            float: right;
        }
    </style>
</head>
<body>

<div class="box">
    <h2> Calculator </h2>

<?php
$numbers = [7,9,2,1,14,99,27,26,10];

// addition
$sum = 0;
for($i=0; $i<9; $i++){
    $sum = $sum + $numbers[$i];
}

// subtraction
$diff = $numbers[0];
for($i=1; $i<9; $i++){
    $diff = $diff - $numbers[$i];
}

// multiplication
$product = 1;
for($i=0; $i<9; $i++){
    $product = $product * $numbers[$i];
}

// division
$quotient = $numbers[0];
for($i=1; $i<9; $i++){
    $quotient = $quotient / $numbers[$i];
}

echo "<div class='array'><b> Numbers: </b> ";
for($i=0; $i<9; $i++){
    echo $numbers[$i];
    
    if($i < 8){
        echo ", ";
    }
}
echo "</div>";

// results
echo "<div class='result'>";

echo "<div class='row'>
    <span class='label'>Addition</span>
    <span class='value'>".$sum."</span>
    </div>";

echo "<div class='row'>
    <span class='label'>Subtraction</span>
    <span class='value'>".$diff."</span>
    </div>";

echo "<div class='row'>
    <span class='label'>Multiplication</span>
    <span class='value'>".$product."</span>
    </div>";

echo "<div class='row'>
    <span class='label'>Division</span>
    <span class='value'>".$quotient."</span>
    </div>";

echo "</div>";
?>

</div>

</body>
</html>