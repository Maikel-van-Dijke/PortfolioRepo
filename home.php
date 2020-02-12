<?php
if(isset($_POST['but_login'])){
session_destroy();
header('Location: portfolio.php');
}
?>
<!doctype html>
<html>
<head>
    <title>Portfolio</title>
    <link rel="stylesheet" href="portfolio.css"/>
</head>
<body>
<nav>
    <ul id="myMenu">
        <li><A HREF="home.php">Home</A></li>//
        <li><A HREF="portfolio.php">Inloggen</A></li>//
        <li><A HREF="contact.php">Contact</A></li>//
    </ul>
</nav>
<h1>Welkom op de website van mijn portfolio</h1>
<h3>Hier zet ik dingen over mezelf en een aantal projecten</h3>
<img class="Ikke" src="Ikke.jpg" alt="Foto van mezelf">
</body>
</html>