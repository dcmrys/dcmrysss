<!DOCTYPE html>
<html>
<head>
    <title> Math Calculator </title>
    <style>
        body {
            font-family: "Century Gothic", Arial, sans-serif;
            background-color: #f0f2f5;
            text-align: center;
        }

        .box {
            width: 400px;
            margin: 60px auto;
            background-color: white;
            padding: 30px;
            border: 1px solid #ccc;
        }

        h2 {
            margin-bottom: 20px;
        }

        .numbers {
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
function compute($a, $b, $c){
    $sum = $a + $b + $c;
    $diff = $a - $b - $c;
    $prod = $a * $b * $c;
    $quot = $a / $b / $c;

    echo "<div class='numbers'>
          <b>Numbers:</b> $a, $b, $c
          </div>";

    echo "<div class='result'>";
    echo "<div class='row'>
          <span class='label'>Sum</span>
          <span class='value'>$sum</span>
          </div>";

    echo "<div class='row'>
          <span class='label'>Difference</span>
          <span class='value'>$diff</span>
          </div>";

    echo "<div class='row'>
          <span class='label'>Product</span>
          <span class='value'>$prod</span>
          </div>";

    echo "<div class='row'>
          <span class='label'>Quotient</span>
          <span class='value'>$quot</span>
          </div>";

    echo "</div>";
}

compute(10, 5, 2);
?>

</div>

</body>
</html>