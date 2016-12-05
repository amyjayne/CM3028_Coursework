<?php

include("dataconnect.php");

$about = $_POST["about"];

$sql = "INSERT INTO about (description) VALUES ('$about')";

if (mysqli_query($db, $sql)) {
}
else {
    echo "Error: " . $sql . "<br>" . mysqli_error($db);
}

header("location:home.php");
?>