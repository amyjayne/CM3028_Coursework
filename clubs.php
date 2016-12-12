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

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <title>Clubs Page</title>
    <link rel="stylesheet" href="homepage.css">
    <link rel="stylesheet" href="clubspage.css">

</head>
<body>

<div>
    <header>
        <div class="header">
            <div class="home-menu pure-menu pure-menu-fixed">
                <ul class="pure-menu-list">
                    <li><a href ="index.php">Home</a></li>
                    <li><a href ="clubs.php">Clubs</a></li>
                    <li><a href ="health.php">Health and Fitness</a></li>
                </ul>
    </header>
</div>

<div id="banner">
    <p> clubs </p>
</div>


<div id="content">
    <div id="basketball">
        <p>
<<<<<<< HEAD
            An image that is a link:
            <a
                <?
                echo "<a href='club1.php'>{$clubName}</a>";
                }

                ?>
                <img src="images/basketball.jpg"
            </a>
        </p>

        <img src="images/basketball.jpg">

>>>>>>> origin/master
        <img src="images/boxing.jpg">
        <img src="images/hockey.jpg">
    </div>
</div>






</body>
</html>
