<?php
/*
    Reference:
    mtuts           -   https://www.youtube.com/watch?v=3CS-eQdcMLU
    The Net ninja   -   https://www.youtube.com/watch?v=6ZDTUZ1KRUI
    Traversy Media  -   https://www.youtube.com/watch?v=W4rSS4-LdIE
*/
    session_start();
    if((isset($_GET["login"]) == true) && (isset($_GET["passwd"]) == true) && (strcmp($_GET["submit"], "OK") == 0))
    {
        $_SESSION["login"] = $_GET["login"];
        $_SESSION["passwd"] = $_GET["passwd"];
    }
    $username = $_SESSION["login"];
    $password = $_SESSION["passwd"];

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>ex00-index.php</title>
    </head>

    <style>
    body
    {
        background-color: cyan;
    }
    form
    {
        background: yellow;
    }
    </style>
    
    <body>
        <form action="index.php" method="GET">
            Username: <input type="text" name="login" value="<?php echo($username); ?>">
            <br>
            Password: <input type="text" name="passwd" value="<?php echo($password); ?>">
            <input type="submit" value="OK">
        </form>
    </body>
</html>