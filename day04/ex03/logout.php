<?php
/*
would it be better to use:
unset($_SESSION["loggued_on_user"]);
Or is it ok to set session equal to "", so when whoami is ran, we can give error message since the string is empty.
*/
    session_start();
    $_SESSION["loggued_on_user"] = "";
?>