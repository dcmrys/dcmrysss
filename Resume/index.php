<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<title>Dcmrys Resume</title>

<style>
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family:'Poppins', sans-serif;
}

body{
    background: linear-gradient(to right, #f5f5f5, #ececec);
    color: #222;
    padding: 40px;
}

.container{
    max-width: 1000px;
    margin: auto;
    background: #fff;
    display: grid;
    grid-template-columns: 320px 1fr;
    box-shadow: 0 10px 25px rgba(0,0,0,0.08);
    border-radius: 18px;
    overflow: hidden;
}

.left{
    background: #6e3333;
    color: white;
    padding: 35px 25px;
    text-align: center;
}

.left img{
    width: 160px;
    height: 160px;
    border-radius: 50%;
    object-fit: cover;
    border: 5px solid white;
    margin-bottom: 18px;
}

.left h1{
    font-size: 25px;
    margin-bottom: 6px;
}

.left h3{
    font-weight: normal;
    font-size: 16px;
    margin-bottom: 20px;
    color: #f7dede;
}

.contact{
    text-align: left;
    margin-top: 25px;
}

.contact p{
    margin: 12px 0;
    font-size: 14px;
}

.side-job{
    margin-top: 28px;
    margin-bottom: 12px;
    font-size: 18px;
    border-bottom: 1px solid rgba(255,255,255,0.3);
    padding-bottom: 6px;
    text-align: left;
}

.skills{
    text-align: left;
    padding-left: 0;
}   

.skills li{
    color: rgba(255, 255, 255, 0.79);
    font-weight: 700;
    margin-bottom: 8px;
    list-style: none;
    background:rgba(0, 0, 0, 0.42);
    padding: 8px;
    border-radius: 8px;
    font-size: 14px;
}

.right{
    padding: 35px;
}

.section{
    margin-bottom: 28px;
}

.section h2{
    color: #6e3333;
    margin-bottom: 10px;
    font-size: 22px;
}

.section h2::after{
    content:'';
    display: block;
    width: 55px;
    height: 3px;
    background: #6e3333;
    margin-top: 5px;
    border-radius: 10px;
}

.section p{
    line-height: 1.7;
    color: #555;
    margin-top: 8px;
}

.item{
    margin-top: 18px;
    padding: 14px;
    background: #fafafa;
    border-left: 4px solid #6e3333;
    border-radius: 8px;
}

.item h4{
    font-size: 15px;
    margin-bottom: 5px;
    color: #222;
}

.item span{
    font-size: 14px;
    color: #777;
}

ul{
    margin-top: 8px;
    padding-left: 18px;
}

li{
    margin-bottom: 8px;
}

.footer{
    margin-top: 30px;
    font-size: 13px;
    color: #888;
}

@media(max-width: 850px){
    .container{
        grid-template-columns: 1fr;
    }
}
</style>
</head>


<!-- BODY: DETAILS OF RESUME -->
<body>

<?php
$name = "Maryclaire Jashley Dela Cruz";
$job = "Application & Web Developer";
$email = "dcmrys@gmail.com";
$phone = "0976 399 2261";
?>

<div class="container">
    <div class="left">

        <img src="profile.jpg" alt="Profile Picture">

        <h1><?php echo $name; ?></h1>
        <h3><?php echo $job; ?></h3>

        <div class="contact">
            <div class="side-job"><strong>Contact </strong></div>
            <p><?php echo $email; ?></p>
            <p><?php echo $phone; ?></p>
            <p>Marikina, Philippines </p>
        </div>

        <div class="side-job"><strong>Skills </strong></div>
        <ul class="skills">
            <li>HTML </li>
            <li>CSS </li>
            <li>Java </li>
            <li>JavaScript </li>
            <li>Python </li>
            <li>PHP & MySQL</li>
            <li>Basic UI / UX </li>
        </ul>
    </div>

    <div class="right">

        <div class="section">
            <h2>Profile </h2>
            <p>
                A current student pursuing a Bachelor of Science in Information Technology 
                with a passion for web development. Eager to apply my skills in HTML, CSS, 
                JavaScript, and PHP to create engaging and responsive websites.
            </p>
        </div>

        <div class="section">
            <h2>Education </h2>
            <div class="item">
                <h4>Bachelor of Science in Information Technology Specializing in Web and Mobile Applications</h4>
                <span>FEU Institute of Technology | 2024 - Present </span>
            </div>
            <div class="item">
                <h4>STEM Strand </h4>
                <span>APEC Schools Marikina Heights | 2019 - 2024 </span>
            </div>
        </div>

        <div class="section">
            <h2>Certifications </h2>
            <ul>
                <li>Certified Database </li>
                <li>Certified Java </li>
                <li>Certified JavaScript </li>
                <li>Certified Python </li>
            </ul>
        </div>

        <div class="section">
            <h2>Experience </h2>
            <div class="item">
                <h4>Student - Web Development </h4>
                <span>FEU Institute of Technology </span>
                <ul>
                    <li>Developed simple web applications and websites </li>
                    <li>Collaborated with team members </li>
                </ul>
            </div>
        </div>

        <div class="footer">
            &copy; <?php echo date("Y"); ?> <?php echo $name; ?>
        </div>

    </div>
</div>

</body>
</html>