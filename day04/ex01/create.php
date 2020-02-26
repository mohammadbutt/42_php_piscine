<?php
/*
    Reference:
    https://www.youtube.com/watch?v=8-r7zNZ8kng
    https://stackoverflow.com/questions/9671659/php-is-null-and-null/9671787#9671787
    Eli the Computer Guy - https://www.youtube.com/watch?v=QmBSijbgTwE
    https://stackoverflow.com/questions/8641889/how-to-use-php-serialize-and-unserialize
    Online hash calculator - http://www.unit-conversion.info/texttools/whirlpool/
*/

function create_directories()
{
    $htdocs_path = "../htdocs";
    $private_path = "/private";
    $full_path = $htdocs_path.$private_path;
    if(file_exists($htdocs_path) == false && file_exists($full_path) == false)
    {
        mkdir($htdocs_path);
        mkdir($full_path);
    }
}

function is_login_valid()
{
    $file_path = "../htdocs/private/passwd";
    if(file_exists($file_path) == false)
        return(true);
    $i = 0;
    $file_array = unserialize(file_get_contents("../htdocs/private/passwd"));
    $user_count = count($file_array);
    while($i < $user_count)
        if(strcmp($file_array[$i++]["login"], $_POST["login"]) == 0)
            return(false);
    return(true);
}

    create_directories();
    $file_path = "../htdocs/private/passwd";
    $login = $_POST["login"];
    $password = $_POST["passwd"];
    $submit = $_POST["submit"];
    if($login !== "" && $password !== "" && strcmp($submit, "OK") == false && is_login_valid() == true)
    {
        if(file_exists($file_path) == true)
            $new_user_credentials = unserialize(file_get_contents($file_path));
        $new_user_credentials[] = array("login" => $login, "passwd" => hash("whirlpool", $password));
        file_put_contents($file_path, serialize($new_user_credentials));
        echo("OK\n");
    }
   else
       echo("ERROR\n");
?>