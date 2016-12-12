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
            <li><a href ="index.php">Home</a></li>
            <li><a href ="clubs.php">Clubs</a></li>
            <li><a href ="health.php">Health and Fitness</a></li>
        </ul>
    </div>
</div>

<div class="login">
<?php
define('CSS_PATH', 'template/css/');
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    ?>
    <main>
        <form action="login.php" method="post">
            <input type="text" name="username" placeholder="username"></br>
            <input type="password" name="password" placeholder="password"></br>
            <p><input type="submit" value="Submit"></p>
        </form>
    </main>
    <?
} elseif ($_SERVER['REQUEST_METHOD'] === 'POST') {
    include("dbconnect.php");
    $username = $_POST["username"];
    $password = $_POST["password"];
    function checklogin($username, $password, $db)
    {
        $sql = "SELECT * FROM users WHERE username='" . $username . "' and password='" . $password . "'";
        $result = $db->query($sql);
        while ($row = $result->fetch_array()) {
            return true;
        }
        return false;
    }
    if (checklogin($username, $password, $db)) {
        session_start();
        $_SESSION['username'] = $username;
        header("location:signedin.php");
    } else {
        header("location:login.php");
    }
} else {
    // this is impossible
    print('whoops');

    include("signup.php");
}
?>
</div>

</body>