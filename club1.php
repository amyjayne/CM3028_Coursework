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

<!DOCTYPE html>
<html>
<title>W3.CSS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<body>




<!--slideshow thing-->
<meta name="viewport" content="width=device-width, initial-scale=auto">
<link rel="stylesheet" href="Basketball.css">
<!--Slideshow-->


<div class="w3-content w3-display-container">
    <img class="mySlides" src="images/boxingslideshow.jpg"style="width:980px" >
    <img class="mySlides" src="images/hockeyslideshow.jpg"style="width:980px">
    <img class="mySlides" src="images/basketballslideshow.jpg"style="width:980px">

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

</body>
</html>

</body>
</html>
