<?php
{
    if ($_SERVER['REQUEST_METHOD'] === 'GET') {
        ?>
        <main>
            <form action="signup.php" method="post">
                <input type="text" name="name" placeholder="Name"></br>
                <input type="text" name="email" placeholder="Email"></br>
                <input type="text" name="username" placeholder="Username"></br>
                <input type="password" name="password" placeholder="Password"></br>
                <p><input type="submit" value="Submit"></p>
            </form>
        </main>
        <?
    } elseif ($_SERVER['REQUEST_METHOD'] === 'POST') {
        include ('dbconnect.php');
        $userID = str_replace(' ', '-', $_POST["name"]);
        $name = $_POST["name"];
        $email = $_POST["email"];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $sql = "INSERT INTO users (userID, name, email, username, password) VALUES ('". $userID ."', '" .$name."', '" .$email."', '".$username."', '".$password."')";
        if (mysqli_query($db, $sql)) {
        } else {
            echo "Error: " . $sql . "<br>Error Message:" . mysqli_error($db);
        }
        header("signedin.php");
    }
//test
} else {
    header("location:signup.php");
}
?>