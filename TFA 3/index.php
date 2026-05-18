<!DOCTYPE html>
<html>
<head>
    <title>Student List</title>
    <style>
        table {
            border-collapse: collapse;
            width: 80%;
            margin: auto;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: center;
        }
        img {
            width: 50px;
        }
    </style>
</head>
<body>

<h2 style="text-align:center;">Student List</h2>

<?php
// separate arrays (easier for beginners)
$names = ["Anna","Brian","Carl","Diana","Evan","Faith","George","Hannah","Ian","Jane"];
$ages = [18,19,20,18,19,20,18,19,20,18];
$birthdays = ["Jan1","Feb2","Mar3","Apr4","May5","Jun6","Jul7","Aug8","Sep9","Oct10"];
$contacts = ["0911","0922","0933","0944","0955","0966","0977","0988","0999","0900"];
$images = [
    "https://via.placeholder.com/50",
    "https://via.placeholder.com/50",
    "https://via.placeholder.com/50",
    "https://via.placeholder.com/50",
    "https://via.placeholder.com/50",
    "https://via.placeholder.com/50",
    "https://via.placeholder.com/50",
    "https://via.placeholder.com/50",
    "https://via.placeholder.com/50",
    "https://via.placeholder.com/50"
];

// simple alphabetical sort (bubble sort)
for($i=0; $i<10; $i++){
    for($j=0; $j<9; $j++){
        if($names[$j] > $names[$j+1]){
            // swap all values
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