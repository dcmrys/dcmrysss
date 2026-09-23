<?php
// Metric conversions
function centimetreToMillimetre($cm) { return $cm * 10; }
function decimetreToCentimetre($dm) { return $dm * 10; }
function metreToCentimetre($m) { return $m * 100; }
function kilometreToMetre($km) { return $km * 1000; }

// Imperial conversions
function footToInch($ft) { return $ft * 12; }
function yardToFoot($yd) { return $yd * 3; }
function chainToYard($ch) { return $ch * 22; }
function furlongToYard($fur) { return $fur * 220; }
function mileToYard($mi) { return $mi * 1760; }
function mileToFurlong($mi) { return $mi * 8; }

// Metric to Imperial
function millimetreToInch($mm) { return $mm * 0.03937; }
function centimetreToInch($cm) { return $cm * 0.39370; }
function metreToInch($m) { return $m * 39.37008; }
function metreToFoot($m) { return $m * 3.28084; }
function metreToYard($m) { return $m * 1.09361; }
function kilometreToYard($km) { return $km * 1093.6133; }
function kilometreToMile($km) { return $km * 0.62137; }

// Imperial to Metric
function inchToCentimetre($in) { return $in * 2.54; }
function footToCentimetre($ft) { return $ft * 30.48; }
function yardToCentimetre($yd) { return $yd * 91.44; }
function yardToMetre($yd) { return $yd * 0.9144; }
function mileToMetre($mi) { return $mi * 1609.344; }
function mileToKilometre($mi) { return $mi * 1.609344; }
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Conversion Chart</title>

<style>
    body { 
        font-family: Arial, sans-serif; 
        background: #ffffff; 
        color: #eee; 
        margin: 20px; 
    }
    h1 { 
        text-align: center; 
        color: #332d2d; 
    }
    .chart { 
        display: grid; 
        grid-template-columns: 1fr 1fr; 
        gap: 20px; 
        margin-top: 20px; 
    }
    .section { 
        background: #000000; 
        border: 2px solid #686060; 
        border-radius: 8px; 
        padding: 15px; 
    }
    .section h2 { 
        background: #2c2424; 
        color: #fff; 
        padding: 8px; 
        margin: -15px -15px 10px -15px; 
        border-bottom: 2px solid #000; 
        text-align: center; 
    }
    table { 
        width: 100%; 
        border-collapse: collapse; 
    }
    td { 
        padding: 6px; 
        border-bottom: 1px solid #a2a0a0; 
    }
    td:first-child { 
        font-weight: bold; 
        color: #ffffff; 
        }
</style>
</head>
<body>
    
<h1>Measure Conversion Chart</h1>

<div class="chart">
    <div class="section">
        <h2>Metric Conversions</h2>
        <table>
            <tr><td>1 centimetre</td><td><?php echo centimetreToMillimetre(1); ?> millimetres</td></tr>
            <tr><td>1 decimetre</td><td><?php echo decimetreToCentimetre(1); ?> centimetres</td></tr>
            <tr><td>1 metre</td><td><?php echo metreToCentimetre(1); ?> centimetres</td></tr>
            <tr><td>1 kilometre</td><td><?php echo kilometreToMetre(1); ?> metres</td></tr>
        </table>
    </div>

    <div class="section">
        <h2>Imperial Conversions</h2>
        <table>
            <tr><td>1 foot</td><td><?php echo footToInch(1); ?> inches</td></tr>
            <tr><td>1 yard</td><td><?php echo yardToFoot(1); ?> feet</td></tr>
            <tr><td>1 chain</td><td><?php echo chainToYard(1); ?> yards</td></tr>
            <tr><td>1 furlong</td><td><?php echo furlongToYard(1); ?> yards</td></tr>
            <tr><td>1 mile</td><td><?php echo mileToYard(1); ?> yards</td></tr>
            <tr><td>1 mile</td><td><?php echo mileToFurlong(1); ?> furlongs</td></tr>
        </table>
    </div>

    <div class="section">
        <h2>Metric to Imperial Conversions</h2>
        <table>
            <tr><td>1 millimetre</td><td><?php echo millimetreToInch(1); ?> inches</td></tr>
            <tr><td>1 centimetre</td><td><?php echo centimetreToInch(1); ?> inches</td></tr>
            <tr><td>1 metre</td><td><?php echo metreToInch(1); ?> inches</td></tr>
            <tr><td>1 metre</td><td><?php echo metreToFoot(1); ?> feet</td></tr>
            <tr><td>1 metre</td><td><?php echo metreToYard(1); ?> yards</td></tr>
            <tr><td>1 kilometre</td><td><?php echo kilometreToYard(1); ?> yards</td></tr>
            <tr><td>1 kilometre</td><td><?php echo kilometreToMile(1); ?> miles</td></tr>
        </table>
    </div>

    <div class="section">
        <h2>Imperial to Metric Conversions</h2>
        <table>
            <tr><td>1 inch</td><td><?php echo inchToCentimetre(1); ?> centimetres</td></tr>
            <tr><td>1 foot</td><td><?php echo footToCentimetre(1); ?> centimetres</td></tr>
            <tr><td>1 yard</td><td><?php echo yardToCentimetre(1); ?> centimetres</td></tr>
            <tr><td>1 yard</td><td><?php echo yardToMetre(1); ?> metres</td></tr>
            <tr><td>1 mile</td><td><?php echo mileToMetre(1); ?> metres</td></tr>
            <tr><td>1 mile</td><td><?php echo mileToKilometre(1); ?> kilometres</td></tr>
        </table>
    </div>
</div>
</body>
</html>
