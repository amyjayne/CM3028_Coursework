<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Clubs Page</title>
    <link rel="stylesheet" href="homepage.css">
    <link rel="stylesheet" href="clubs.css">
    
</head>

<body>

<header>
<div class="header">
    <div class="home-menu pure-menu pure-menu-fixed">
        <ul class="pure-menu-list">
            <li><a href ="index.php">Home</a></li>
            <li><a href ="clubs.php">Clubs</a></li>
            <li><a href ="health.php">Health and Fitness</a></li>
        </ul>
</header>


<div id= "banner">

</div>

<div id="content">
    <div id="basketball">
        <img src="images/basketball.jpg" id="ball" alt="image">
        <img src="images/boxing.jpg" id="box" alt="image2">
        <img src="images/hockey.jpg" id="hock" alt="image3">
    </div>
</div>

</body>
</html>

<?php
include("dbconnect.php");

$sql = "SELECT * FROM club";
$result = $db->query($sql);
while($row = $result->fetch_array())
{
    $clubID = $row['clubID'];
    $clubName = $row['clubName'];
    $description = $row['description'];
    ?>
    <?
    echo "<a href='club1.php'>{$clubName}</a>";
}