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
    <link rel="stylesheet" href="clubs.css">



</head>
<body>

<div>



    <header>



        <div class="header">
            <div class="home-menu pure-menu pure-menu-fixed">
                <ul class="pure-menu-list">
                    <li><a href ="index.html">Home</a></li>
                    <li><a href ="clubs.html">Clubs</a></li>
                    <li><a href ="health.html">Health and Fitness</a></li>
                    <li><a href ="blog.html">Blog</a></li>
                </ul>

    </header>

</div>
<div id="banner">

    <p> clubs </p>

</div>


<div id="content">





    <div id="basketball">


        <p>

            <a href='club1.php'>{$clubName}</a>
            <img src="images/basketball.jpg"
        </p>
    >

        <img src="images/boxing.jpg">

        <img src="images/hockey.jpg">





    </div>



</div>






</body>
</html>
