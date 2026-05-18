<!DOCTYPE html>
<html>
<head>
    <title>Array Table</title>
    <style>
        body {
            font-family: Arial;
        }
        table {
            border-collapse: collapse;
            width: 90%;
            margin: auto;
        }
        th, td {
            border: 1px solid black;
            padding: 10px;
            text-align: center;
        }
        img {
            width: 60px;
            height: 60px;
        }
    </style>
</head>
<body>

<h2 style="text-align:center;">Student List</h2>

<?php
$people = [
    ["name"=>"Anna","age"=>18,"birthday"=>"Jan 1, 2007","contact"=>"09111111111","image"=>"https://via.placeholder.com/60"],
    ["name"=>"Brian","age"=>19,"birthday"=>"Feb 2, 2006","contact"=>"09222222222","image"=>"https://via.placeholder.com/60"],
    ["name"=>"Carl","age"=>20,"birthday"=>"Mar 3, 2005","contact"=>"09333333333","image"=>"https://via.placeholder.com/60"],
    ["name"=>"Diana","age"=>18,"birthday"=>"Apr 4, 2007","contact"=>"09444444444","image"=>"https://via.placeholder.com/60"],
    ["name"=>"Evan","age"=>19,"birthday"=>"May 5, 2006","contact"=>"09555555555","image"=>"https://via.placeholder.com/60"],
    ["name"=>"Faith","age"=>20,"birthday"=>"Jun 6, 2005","contact"=>"09666666666","image"=>"https://via.placeholder.com/60"],
    ["name"=>"George","age"=>18,"birthday"=>"Jul 7, 2007","contact"=>"09777777777","image"=>"https://via.placeholder.com/60"],
    ["name"=>"Hannah","age"=>19,"birthday"=>"Aug 8, 2006","contact"=>"09888888888","image"=>"https://via.placeholder.com/60"],
    ["name"=>"Ian","age"=>20,"birthday"=>"Sep 9, 2005","contact"=>"09999999999","image"=>"https://via.placeholder.com/60"],
    ["name"=>"Jane","age"=>18,"birthday"=>"Oct 10, 2007","contact"=>"09000000000","image"=>"https://via.placeholder.com/60"]
];

usort($people, function($a, $b) {
    return strcmp($a["name"], $b["name"]);
});

echo "<table>";
echo "<tr>
        <th>No.</th>
        <th>Name</th>
        <th>Image</th>
        <th>Age</th>
        <th>Birthday</th>
        <th>Contact</th>
      </tr>";

$no = 1;
foreach($people as $p){
    echo "<tr>";
    echo "<td>".$no++."</td>";
    echo "<td>".$p["name"]."</td>";
    echo "<td><img src='".$p["image"]."'></td>";
    echo "<td>".$p["age"]."</td>";
    echo "<td>".$p["birthday"]."</td>";
    echo "<td>".$p["contact"]."</td>";
    echo "</tr>";
}
echo "</table>";
?>

</body>
</html>