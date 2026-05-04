<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Length Converter</title>

<style>
    body {
        font-family: Arial, sans-serif;
        background: #f2f2f2; /* simple soft background */
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin: 0;
    }

    .box {
        width: 260px;
        background: #ffffff;
        padding: 15px;
        border-radius: 6px;
    }

    h2 {
        text-align: center;
        font-weight: normal;
        margin-bottom: 10px;
    }

    input, select, button {
        width: 100%;
        padding: 6px;
        margin: 5px 0;
        border: 1px solid #ccc;
        background: #fff;
    }

    button {
        cursor: pointer;
    }

    .result {
        text-align: center;
        margin-top: 10px;
    }
</style>
</head>

<body>

<div class="box">
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

            // Convert to meters
            switch ($from) {
                case "meter": $meters = $value; break;
                case "centimeter": $meters = $value / 100; break;
                case "kilometer": $meters = $value * 1000; break;
                case "inch": $meters = $value * 0.0254; break;
            }

            // Convert to target
            switch ($to) {
                case "meter": $result = $meters; break;
                case "centimeter": $result = $meters * 100; break;
                case "kilometer": $result = $meters / 1000; break;
                case "inch": $result = $meters / 0.0254; break;
            }

            echo $result . " " . $to;
        }
        ?>
    </div>
</div>

</body>
</html>