<?php
/*
    References:
*/

/*
    ---Functions---
*/

function is_login_password_valid()
{
    $user_credential_file_path = "database/user_credential.txt";
    $_SESSION["login"] = $_POST["login"];
    $_SESSION["password"] = $_POST["password"];
    $login = $_SESSION["login"];
    $password = $_SESSION["password"];
    if(file_exists($user_credential_file_path) == false)
        return(false);
    $file_array = unserialize(file_get_contents($user_credential_file_path));
    $user_count = count($file_array);
    $i = 0;
    while($i < $user_count)
    {
        if(strcmp($login, $file_array[$i]["login"]) == 0)
        {
            if(strcmp(hash("whirlpool", $password), $file_array[$i]["password"]) == 0)
                return(true);
            else
                return(false);
        }
        $i++;
    }
    return(false);
}

/*
    ---main---
*/

    session_start();
    if(is_login_password_valid() == true)
        echo("Welcome ".$_POST["login"]."<br>");
    else
        echo("Invalid login or password. Please Try again");

?>