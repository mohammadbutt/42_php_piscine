<?php
/*
    References:
    https://stackoverflow.com/questions/6768793/get-the-full-url-in-php
*/

/*
    ---Functions---
*/

function is_login_password_valid()
{
    $user_credential_file_path = "../database/user_credential.txt";
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

function get_whoami()
{
    return($_SESSION["logged_in_user"]);
}

function set_whoami()
{
    $_SESSION["logged_in_user"] = $_POST["login"];
}

function ft_logout()
{
    $_SESSION["logged_in_user"] = "";
    unset($_SESSION["logged_in_user"]);
}

/*
    ---main---
*/

    session_start();
    if(is_login_password_valid() == true)
    {
        set_whoami();
        header("Location: ../index.php");
    }
    else
    {
        header("Location: login_account_invalid.html");
    }
?>