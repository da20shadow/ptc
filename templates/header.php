<?php session_start();

;?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>PTC Site</title>
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.4/css/all.css"
          integrity="sha384-DmABxgPhJN5jlTwituIyzIUk6oqyzf3+XuP7q3VfcWA2unxgim7OSSZKKf0KSsnh"
          crossorigin="anonymous">
<!--    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">-->
<!--    <script src="https://kit.fontawesome.com/ea547d348e.js" crossorigin="anonymous"></script>-->
</head>
<body>
<div class="header">
    <div id="logo"><a href="../index.php">LOGO</a></div>
    <nav>
        <a href="../index.php">Home</a>
        <?php if(isset($_SESSION['username'])) {;?>
        <a href="../ptc_ads.php">View Ads</a>
        <a href="../dashboard.php">Dashboard</a>
        <a href="../logout.php">Logout</a>
        <?php }else { ;?>
        <a href="../login.php">Login</a>
        <a href="../register.php">Register</a>
        <?php } ;?>
        <a href="../faq.php">FAQ</a>
    </nav>
</div>
<hr>

