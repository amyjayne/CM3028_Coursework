<?php
include("dbconnect.php");

$sql = "SELECT * FROM club";
$result = $db->query($sql);
while($row = $result->fetch_array())
{
    $clubName = $row['clubName'];
    $description = $row['description'];

    echo "<li><a href='club/{$articleID}'>{$articleName}</a> by {$articleAuthor}</li>";
}

?>