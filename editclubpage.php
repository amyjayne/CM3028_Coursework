<?php
session_start();
if (isset($_SESSION['username'])) //SESSION DOES EXIST
{
    if ($_SERVER['REQUEST_METHOD'] === 'GET') {
        ?>
        <main>
            <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
            <script>tinymce.init({selector: 'textarea'});</script>
            <form action="editclubpage.php" method="post">
                <input type="text" name="clubName" placeholder="Club Name">
                <input type="hidden" value="1" name="accessID">
                <textarea name="description"></textarea>
                <input type="submit">
            </form>
        </main>
        <?
    } elseif ($_SERVER['REQUEST_METHOD'] === 'POST') {
        include ('dbconnect.php');
        $clubID = str_replace(' ', '-', $_POST["clubName"]);
        $accessID = $_POST['accessID'];
        $clubName = $_POST["clubName"];
        $description = $_POST["description"];
        $sql = "INSERT INTO club (clubID, clubName, description) VALUES ('". $clubID ."', '". $accessID ."', '". $clubName ."', '".$description."')";
        if (mysqli_query($db, $sql)) {
        } else {
            echo "Error: " . $sql . "<br>Error Message:" . mysqli_error($db);
        }
        header("signedin.php");
    }
//test
} else {
    header("location:editclubpage.php");
}
?>