<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Length Converter</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background: white;
            padding: 20px;
            border-radius: 10px;
            width: 300px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }

        h2 {
            text-align: center;
        }

        input, select, button {
            width: 100%;
            padding: 8px;
            margin: 8px 0;
        }

        .result {
            margin-top: 10px;
            font-weight: bold;
            text-align: center;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Length Converter</h2>

    <form method="POST">
        <input type="number" name="value" step="any" placeholder="Enter value" required>

        <select name="from">
            <option value="meter">Meter</option>
            <option value="centimeter">Centimeter</option>
            <option value="kilometer">Kilometer</option>
            <option value="inch">Inch</option>
        </select>

        <select name="to">
            <option value="meter">Meter</option>
            <option value="centimeter">Centimeter</option>
            <option value="kilometer">Kilometer</option>
            <option value="inch">Inch</option>
        </select>

        <button type="submit" name="convert">Convert</button>
    </form>

    <div class="result">
        <?php
        if (isset($_POST['convert'])) {
            $value = $_POST['value'];
            $from = $_POST['from'];
            $to = $_POST['to'];

            // Convert everything to meters first
            switch ($from) {
                case "meter": $meters = $value; break;
                case "centimeter": $meters = $value / 100; break; // 1 m = 100 cm
                case "kilometer": $meters = $value * 1000; break;
                case "inch": $meters = $value * 0.0254; break;
            }

            // Convert meters to target unit
            switch ($to) {
                case "meter": $result = $meters; break;
                case "centimeter": $result = $meters * 100; break;
                case "kilometer": $result = $meters / 1000; break;
                case "inch": $result = $meters / 0.0254; break;
            }

            echo "Result: " . $result . " " . $to;
        }
        ?>
    </div>
</div>

</body>
</html>

