<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Dcmrys Resume</title>
<style>
       body {
           margin: 0;
           font-family: Arial, sans-serif;
           background-color: #f4f4f4;
           color: #121212;
       }
       .container {
           width: 80%;
           margin: 40px auto;
           background: #fff;
           padding: 30px;
           box-shadow: 0 0 10px rgba(0,0,0,0.1);
       }
       h1, h2 {
           margin-bottom: 5px;
       }
       h1 {
           color: #000;
       }
       h2 {
           border-bottom: 1px solid #ccc;
           padding-bottom: 5px;
           color: #6e3333;
       }
       p {
           color: #555;
           line-height: 1.6;
       }
       .section {
           margin-bottom: 25px;
       }
       .header {
           text-align: center;
           margin-bottom: 30px;
       }
       .header p {
           margin: 5px 0;
           color: #666;
       }
       ul {
           padding-left: 20px;
       }
       li {
           margin-bottom: 8px;
       }
       .footer {
           text-align: center;
           font-size: 12px;
           color: #888;
           margin-top: 30px;
       }
</style>
</head>
<body>

<div class="container">
<?php
       $name = "Maryclaire Jashley Dela Cruz";
       $title = "Web Developer";
       $email = "dcmrys@gmail.com";
       $phone = "0976 399 2262";
   ?>

<div class="header">

<h1><?php echo $name; ?></h1>
<p><?php echo $title; ?></p>
<p><?php echo $email; ?></p>
<p><?php echo $phone; ?></p>
</div>

<div class="section">
<h2>Profile</h2>
<p>
           A current student pursuing a Bachelor of Science in Information Technology with a passion for web development. Eager to apply my skills in HTML, CSS, JavaScript, and PHP to create engaging and responsive websites. Dedicated to continuous learning and growth in the field of technology.
</p>
</div>

<div class="section">
<h2>Education</h2>
<p><strong>Bachelor of Science in Information Technology Specializing in Web and Mobile Applications</strong></p>
<p>FEU Institute of Technology | 2024 - Present</p>
<p>-------------------------------------------------------------------------------------------------------------------------------------</p>

<p><strong>Science, Technology, Engineering, and Mathematics</strong></p>
<p>APEC Schools Marikina Heights | 2019 - 2024</p>
</div>

<div class="certifications">
<h2>Certifications</h2>
<ul>
<li>Certified Database Professional</li>
<li>Certified Java Professional</li>
<li>Certified JavaScript Professional</li>
<li>Certified Python Professional</li>
</ul>
</div>

<div class="section">
<h2>Skills</h2>
<ul>
<li>HTML, CSS, JavaScript</li>
<li>PHP & MySQL</li>
<li>Basic UI/UX</li>
</ul>
</div>

<div class="section">
<h2>Experience</h2>
<p><strong>Student - Web Development</strong></p>
<p>FEU Institute of Technology</p>
<ul>
<li>Developed simple web applications and websites</li>
<li>Collaborated with team members</li>
</ul>
</div>

<div class="footer">
<p>&copy; <?php echo date("Y"); ?> <?php echo $name; ?></p>
</div>
</div>
</body>
</html>

