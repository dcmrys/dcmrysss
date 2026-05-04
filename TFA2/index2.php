<!DOCTYPE html>
<html>
<head>
    <title>Two-Digit Decimal Combinations</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f6f9;
            color: #693636;
            margin: 40px;
        }
        h1 {
            text-align: center;
            color: #842c4b;
        }
        .output {
            background: #fff;
            border: 1px solid #ccc;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 6px rgba(0,0,0,0.1);
            line-height: 1.6;
        }
        .output span {
            display: inline-block;
            margin: 3px 6px;
            padding: 5px 10px;
            background: #ffe0e1;
            border-radius: 4px;
        }
    </style>
</head>

<body>
    <h1>All Two-Digit Decimal Combinations</h1>
    <div class="output">
        <?php
        for ($i = 0; $i < 100; $i++) {
            echo "<span>" . str_pad($i, 2, "0", STR_PAD_LEFT) . "</span>";
        }
        ?>
    </div>
</body>
</html>
