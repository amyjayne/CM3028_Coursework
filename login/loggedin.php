<?php
session_start();
$accesslevel = $_SESSION['access_level_session'];
displayAccessLevelInformation($accesslevel);
function displayAccessLevelInformation($accessLevel)
{
    if ($accessLevel == "standarduser") {
        echo "<p style = \"background-color: lightgreen\">You are currently</p>";
    }
    elseif ($accessLevel == "root") {
        echo "<p<p style = \"background-color: red\">You are currently logged in as a root user blah blah</p>";
        echo "<p<p style = \"background-color: red\">You now have access to additional administrative features</p>";
    }
}
?>