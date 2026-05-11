<!DOCTYPE html>
<html>
<head>
<title>Student Registration Form</title>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">

<style>
   body{
       font-family: Montserrat;
       background-color: #f2f2f2;
   }
   .box{
       width: 600px;
       margin: 40px auto;
       background-color: white;
       border-radius: 10px;
       padding: 25px;
       box-shadow: 0px 0px 10px gray;
   }
   h2{
       text-align: center;
       color: darkblue;
   }
   h3{
       background-color: darkblue;
       color: white;
       padding: 8px;
       border-radius: 5px;
       font-size: 16px;
   }
   label{
       font-weight: bold;
   }
   input{
       font-family: Montserrat;
       width: 95%;
       padding: 8px;
       margin-top: 5px;
       margin-bottom: 15px;
       border: 1px solid gray;
       border-radius: 5px;
   }
</style>
</head>

<body>
<div class="box">

<?php
// Declared Variables + Demographics section
$name = "Maryclaire Jashley Dela Cruz";
$age = 20;
$address = "Marikina City, Philippines";
$gender = "Female";

// Education section
$highschool = "APEC Schools - Marikina";
$school = "FEU Institute of Technology";
$year = "2nd Year";
$course = "BS Information Technology";
?>

<h2>Student Registration Form</h2>

<form>
    <h3>Part I. Demographics</h3>
    <label>Name:</label>
    <input type="text" value="<?php echo $name; ?>">
    <label>Age:</label>
    <input type="text" value="<?php echo $age; ?>">
    <label>Address:</label>
    <input type="text" value="<?php echo $address; ?>">
    <label>Gender:</label>
    <input type="text" value="<?php echo $gender; ?>">

    <h3>Part II. Education</h3>
    <label>High School:</label>
    <input type="text" value="<?php echo $highschool; ?>">
    <label>Current School:</label>
    <input type="text" value="<?php echo $school; ?>">
    <label>Year Level:</label>
    <input type="text" value="<?php echo $year; ?>">
    <label>Course:</label>
    <input type="text" value="<?php echo $course; ?>">
</form>

</div>
</body>
</html>