<?php
include("auth.php");
    session_start();
    $login = $_GET["login"];
    $password = $_GET["passwd"];
    if($login !== "" && $password !== "" && auth($login, $password) == true)
    {
        $_SESSION["loggued_on_user"] = $login;
        echo("OK\n");
        return(0);
    }
    else
    {
        $_SESSION["loggued_on_user"] = "";
        echo("ERROR\n");
        return(0);
    }
?>