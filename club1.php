<?php
include("dataconnect.php");

$sql = "SELECT * FROM club";
$result = $db->query($sql);
while($row = $result->fetch_array())
{
    $article = $row['articleID'];
    $articleName = $row['articleAuthor'];

    echo "<li><a href='blog/{$articleID}'>{$articleName}</a> by {$articleAuthor}</li>";
}

?>