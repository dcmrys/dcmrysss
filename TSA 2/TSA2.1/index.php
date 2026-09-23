<!DOCTYPE html>
<html>
<head>
    <title>The Fruits</title>

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
            width: 100%;
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
            background-color: #304831;
            color: white;
        }

        img{
            width: 120px;
            height: 100px;
            border-radius: 10px;
        }

        tr:hover{
            background-color: #f1f1f1;
        }
    </style>
</head>

<body>

    <h1>My Fruits</h1>

    <table>
        <tr>
            <th>Image</th>
            <th>Name</th>
            <th>Description</th>
            <th>Facts</th>
        </tr>

        <?php

        $fruits = array(

            array(
                "image" => "apple.png",
                "name" => "Apple",
                "description" => "Red Fruit",
                "facts" => "Apples are rich in vitamins and good for the heart."
            ),

            array(
                "image" => "banana.png",
                "name" => "Banana",
                "description" => "Yellow Fruit",
                "facts" => "Bananas give energy and contain potassium."
            ),

            array(
                "image" => "orange.png",
                "name" => "Orange",
                "description" => "Orange Fruit",
                "facts" => "Oranges are rich in Vitamin C."
            ),

            array(
                "image" => "strawberry.png",
                "name" => "Strawberry",
                "description" => "Pink Fruit",
                "facts" => "Strawberries are sweet and full of antioxidants."
            ),

            array(
                "image" => "mango.png",
                "name" => "Mango",
                "description" => "Sweet Fruit",
                "facts" => "Mango is known as the king of fruits."
            )

        );

        usort($fruits, function($a, $b){
            return strcmp($a['name'], $b['name']);
        });

        foreach($fruits as $fruit){
            echo "<tr>";
            echo "<td><img src='".$fruit['image']."'></td>";
            echo "<td>".$fruit['name']."</td>";
            echo "<td>".$fruit['description']."</td>";
            echo "<td>".$fruit['facts']."</td>";
            echo "</tr>";
        }

        ?>

    </table>

</body>
</html>