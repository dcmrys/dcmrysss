<!DOCTYPE html>
<html>
<head>
    <title>INDIVIDUAL LIST</title>
    <style>
        body {
            font-family: "Century Gothic", Arial, sans-serif;
            background-color: #f5f5f5;              
        }

        h2 {
            text-align: center;
        }

        table {
            border-collapse: collapse;
            width: 85%;
            margin: auto;
            background-color: white;
        }

        th {
            background-color: #333;
            color: white;
        }

        th, td {
            border: 1px solid black;
            padding: 10px;
            text-align: center;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        img {
            width: 90px;
            height: 90px;
            object-fit: cover;
            border-radius: 10px; 
            object-position: top;

        }
    </style>
</head>
<body>

<h2>INDIVIDUAL LIST</h2>

<?php
$names = ["Trina Ashley","Marielle Allen","Mark Broks","Jovs Ski","Clark Aire","Andrew Jane","Ivan Ni","Daryl Padilla","Joshua Co","Mathew Zen"];
$ages = [20,20,20,21,20,20,21,27,28,21];
$birthdays = ["November 9th","November 18th","October 15th","June 6th","October 16th","March 30th","July 1st","December 26th","December 27th","November 27th"];
$contacts = ["0912-345-6789","0923-345-6789","0934-345-6789","0945-345-6789","0956-345-6789","0978-345-6789","0989-345-6789","0990-345-6789","0901-345-6789","0932-345-6789"];
$images = ["jennie.jpg","lisa.jpg","jimin.jpg","jin.jpg","v.jpg","suga.jpg","jhope.jpg","byeon.jpg","jungkook.jpg","rm.jpg"];

for($i=0; $i<10; $i++){
    for($j=0; $j<9; $j++){
        if($names[$j] > $names[$j+1]){

            $temp = $names[$j];
            $names[$j] = $names[$j+1];
            $names[$j+1] = $temp;

            $temp = $ages[$j];
            $ages[$j] = $ages[$j+1];
            $ages[$j+1] = $temp;

            $temp = $birthdays[$j];
            $birthdays[$j] = $birthdays[$j+1];
            $birthdays[$j+1] = $temp;

            $temp = $contacts[$j];
            $contacts[$j] = $contacts[$j+1];
            $contacts[$j+1] = $temp;

            $temp = $images[$j];
            $images[$j] = $images[$j+1];
            $images[$j+1] = $temp;
        }
    }
}

echo "<table>";

echo "<tr>
<th>No.</th>
<th>Name</th>
<th>Image</th>
<th>Age</th>
<th>Birthday</th>
<th>Contact</th>
</tr>";

for($i=0; $i<10; $i++){
    echo "<tr>";
    echo "<td>".($i+1)."</td>";
    echo "<td>".$names[$i]."</td>";
    echo "<td><img src='".$images[$i]."'></td>";
    echo "<td>".$ages[$i]."</td>";
    echo "<td>".$birthdays[$i]."</td>";
    echo "<td>".$contacts[$i]."</td>";
    echo "</tr>";
}

echo "</table>";
?>

</body>
</html>