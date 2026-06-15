<!DOCTYPE html>
<html>
<head>
    <title>Student Resume</title>

    <style>

        body{
            font-family: Century Gothic;
            background-color: #f4f4f4;
            margin: 0;
        }

        .container{
            width: 80%;
            margin: auto;
            background: white;
            padding: 20px;
        }

        h1{
            text-align: center;
        }

        .menu{
            text-align: center;
            margin-bottom: 20px;
        }

        .menu a{
            text-decoration: none;
            background: #571e41;
            color: white;
            padding: 10px 15px;
            margin: 5px;
            border-radius: 5px;
        }

        .menu a:hover{
            background: #333;
        }

        .content{
            border: 1px solid gray;
            padding: 20px;
            min-height: 300px;
        }

    </style>

</head>

<body>

<div class="container">

    <h1>Student Resume</h1>

    <div class="menu">
        <a href="index.php">Home</a>
        <a href="index.php?page=career">Career Objective</a>
        <a href="index.php?page=personal">Personal Information</a>
        <a href="index.php?page=education">Educational Attainment</a>
        <a href="index.php?page=skills">Skills</a>
        <a href="index.php?page=affiliation">Affiliation</a>
        <a href="index.php?page=work">Work Experience</a>
    </div>

    <div class="content">

        <?php

        if(isset($_GET['page'])){
            $page = $_GET['page'];

        }else{
            $page = "home";
        }

        if($page == "home"){
            include("home.php");

        }elseif($page == "career"){
            include("career.php");

        }elseif($page == "personal"){
            require("personal.php");

        }elseif($page == "education"){
            include("education.php");

        }elseif($page == "skills"){
            require("skills.php");

        }elseif($page == "affiliation"){
            include("affiliation.php");

        }elseif($page == "work"){
            require("work.php");

        }else{
            echo "Page not found.";
        }

        ?>

    </div>

</div>

</body>
</html>