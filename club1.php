

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Health Page</title>
    <link rel="stylesheet" href="homepage.css">
    <link rel="stylesheet" href="club1.css">
</head>



<!--slideshow thing-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">





<body>


<div id="container">



    <header>

        <div class="header">     </div>


        <div class="home-menu pure-menu pure-menu-fixed">

            <ul class="pure-menu-list">
                <li><a href ="index.php">Home</a></li>
                <li><a href ="clubs.php">Clubs</a></li>
                <li><a href ="health.php">Health</a></li>

            </ul>
        </div>


    </header>


    <div id="banner">

        <meta name="viewport" content="width=device-width, initial-scale=auto">
        <link rel="stylesheet" href="Basketball.css">
        <!--Slideshow-->


        <div class="w3-content w3-display-container">

            <img class="mySlides" src="images/basketballslideshow.jpg"style="width:980px">
            <img class="mySlides" src="images/boxingslideshow.jpg"style="width:980px" >
            <img class="mySlides" src="images/hockeyslideshow.jpg"style="width:980px">


            <a class="w3-btn-floating w3-display-left" onclick="plusDivs(-1)">&#10094;</a>
            <a class="w3-btn-floating w3-display-right" onclick="plusDivs(1)">&#10095;</a>
        </div>

        <script>
            var slideIndex = 1;
            showDivs(slideIndex);
            function plusDivs(n) {
                showDivs(slideIndex += n);
            }
            function showDivs(n) {
                var i;
                var x = document.getElementsByClassName("mySlides");
                if (n > x.length) {slideIndex = 1}
                if (n < 1) {slideIndex = x.length}
                for (i = 0; i < x.length; i++) {
                    x[i].style.display = "none";
                }
                x[slideIndex-1].style.display = "block";
            }
        </script>

    </div>


    <div id="content">

        <?php
        include("dbconnect.php");

        $sql = "SELECT * FROM club";
        $result = $db->query($sql);
        while($row = $result->fetch_array())
        {
            $clubID = $row['clubID'];
            $clubName = $row['clubName'];
            $description = $row['description'];

            echo "<li> {$clubName} </br> {$description}</li>";
        }

        ?>


        <iframe src="https://calendar.google.com/calendar/embed?height=600&amp;wkst=1&amp;bgcolor=%23ffffff&amp;src=en.uk%23holiday%40group.v.calendar.google.com&amp;color=%23125A12&amp;src=a8riso7s8bfkj460lkcisfnsfg%40group.calendar.google.com&amp;color=%23853104&amp;ctz=America%2FNew_York" style="border-width:0" width="800" height="700" frameborder="0" scrolling="no"></iframe>






    </div>



</div>
</div>







</body>
</html>
