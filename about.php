<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>About</title>
</head>
<body>
<header>
    <h1>About</h1>
    <h2>Description</h2>
    <p><a href="index.php">Return to home...</a></p>
</header>
<main>
    <?
    include("dataconnect.php");
    $sql_query = "SELECT * FROM about";
    $result = $db->query($sql_query);
    while($row = $result->fetch_array())
    {
        $about = $row['about'];

        echo "<article>
                <h3> {$about}</h3>
              </article>";
    }
    ?>
</main>
</body>
</html>