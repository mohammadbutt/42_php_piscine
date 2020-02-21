<?php
/*
    References:
    SERVER - https://www.php.net/manual/en/reserved.variables.server.php#111471
    base64_encode & base64_decode - https://www.youtube.com/watch?v=yumlc00A9hs
    base64_encode - https://stackoverflow.com/questions/10315757/what-is-the-real-purpose-of-base64-encoding
*/
    $user_name = $_SERVER["PHP_AUTH_USER"];
    $user_password = $_SERVER["PHP_AUTH_PW"];
    if((strcmp($user_name, "zaz") != 0) || (strcmp($user_password, "jaimelespetitsponeys") != 0))
    {
        header("HTTP/1.0 401 Unauthorized");
        header("WWW-Authenticate: Basic realm=''Member area''");
        echo("<html><body>That area is accessible for members only</body><html>      \n");
        return(0);
    }
    $image_file = base64_encode(file_get_contents("../img/42.png"));
    echo("<html><body>\n");
    echo("Hello Zaz<br />\n");
    echo("<img src='data:image/png;base64, $image_file'>\n");
    echo("</body></html>\n");
    return(0);
?>