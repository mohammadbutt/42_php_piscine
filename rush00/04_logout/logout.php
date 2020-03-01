<?php
/*
    References:
    https://stackoverflow.com/questions/27895424/auto-redirect-to-another-html-page/27895443
*/

    session_start();
    $current_user = $_SESSION["logged_in_user"];
    unset($_SESSION["logged_in_user"]);
    header("refresh:5; url=../index.php");
?>

<!DOCTYPE html>
<!--  -------------------------------HTML--------------------------------------------- -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Log-Out</title>
</head>
<body>
    <h3>User <?php echo($current_user); ?> successfully logged out<br></h1>
    <h3>Redirecting to homepage in 5 seconds<br></h3>
</body>
</html>