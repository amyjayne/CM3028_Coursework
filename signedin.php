<?php
session_start();
if (isset($_SESSION['username']))
    ?>
    <!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Sportlethen</title>
    <link rel="stylesheet" href="homepage.css">
</head>
<body>

<div class="header">
    <div class="home-menu pure-menu pure-menu-fixed">
        <ul class="pure-menu-list">
            <li><a href ="signedin.php">Home</a></li>
            <li><a href ="clubs.php">Clubs</a></li>
            <li><a href ="health.php">Health and Fitness</a></li>
            <li><a href ="logout.php">Log Out</a></li>
        </ul>
    </div>
</div>

<div class="splash-container">
    <div class="splash">
        <h1 class="splash-head">Sportlethen</h1>
        <p class="splash-subhead">Community Sports Hub</p>
        <a href="logout.php" class="pure-button pure-button-primary">Log Out</a>
        <!-- <img src="Photos/kidsgroup.jpg" id="bg" alt="Slideshow"> -->
        <img src="images/hockey.jpg" id="bg" alt="slideshow">
    </div>
</div>

<div class="content-wrapper">
    <div class="ribbon l-box-lrg pure-g">
        <div class="l-box-lrg is-center pure-u-1 pure-u-md-1-2 pure-u-lg-2-5">
            <img width="300" alt="File Icons" class="pure-img-responsive" src="images/sportlethen.png">
        </div>
        <div class="pure-u-1 pure-u-md-1-2 pure-u-lg-3-5">

            <h2 class="content-head content-head-ribbon">About Us</h2>

            <p>
                We are an association of local and progressive sports clubs who are working together to develop safe and fun sport and fitness activities in the Portlethen area.
                We work with SportScotland and other organisations to develop our clubs.
                Our website is a single access point to find out more about the fantastic sporting opportunities in our area.
                Our aim is to increase the profile for sport and the visibility of sport clubs in the local community and create a greater choice of sporting/fitness activities.
                We hope that the hub will have a great impact in the development of the local community by improving access to sport and by supporting local sports clubs to work together.
            </p>
            <div class="content">

                <div class="pure-g">
                    <div class="l-box-lrg pure-u-1 pure-u-md-2-5">
                        <li><a href ="editclubpage.php">Edit Club Page</a></li>
                    </div>

                    <a href="http://www.accuweather.com/en/gb/portlethen/ab12-4/weather-forecast/710337" class="aw-widget-legal">
                    </a><div id="awcc1480946197618" class="aw-widget-current"  data-locationkey="710337" data-unit="c" data-language="en-gb" data-useip="false" data-uid="awcc1480946197618"></div><script type="text/javascript" src="http://oap.accuweather.com/launch.js"></script>

                </div>

            </div>
        </div>
    </div>



</div>




</body>
</html>