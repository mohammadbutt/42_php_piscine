<?php
    session_start();
    if ($_GET['login'] != "" && $_GET['passwd'] != "" && $_GET['submit'] === "OK") {
        $_SESSION['login'] = $_GET['login'];
        $_SESSION['passwd'] = $_GET['passwd'];
    }
?>
<html>
    <body>
        <form action="get" method="index.php">
            Username : <input type="text" name="login" value="<?php echo $_SESSION['login']; ?>">
            <br >
            Password : <input type="text" name="passwd" value="<?php echo $_SESSION['passwd']; ?>">
            <input type="submit" value="OK">
        </form>
    </body>
</html>