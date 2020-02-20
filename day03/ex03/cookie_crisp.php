<?php
/*
    References:
    set and delete cookies - youtube.com/watch?v=jort8_4U-88
    set, access, and delete cookies - https://www.geeksforgeeks.org/php-cookies/
    set and read/access cookies - https://www.youtube.com/watch?v=9DMrMruYGFY
*/
    if($_GET["action"] == "set")
        setcookie($_GET["name"], $_GET["value"], time() + (1* 24 * 60 * 60));
    else if($_GET["action"] == "get")
        echo($_COOKIE[$_GET["name"]]."\n");
    else if($_GET["action"] == "del")
        setcookie($_GET["name"], $_GET["value"], time() - (1 * 24 * 60 * 60));
?>