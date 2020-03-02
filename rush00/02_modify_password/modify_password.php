<?php
/*
    References:

*/

/*
    Functions
*/

/*
    Function get_valid_user_index returns index of the user.
    returns -1 if the user either does not exists or the password is wrong.
    returns 0 or greater value if the user and password are valid.
*/

function get_valid_user_index()
{
    $user_credential_file_path = "../database/user_credential.txt";
    $login = $_POST["login"];
    $old_password = $_POST["old_password"];
    $new_passwrod = $_POST["new_password"];
    if(file_exists($user_credential_file_path) == false)
        return(-1);
    $file_array = unserialize(file_get_contents($user_credential_file_path));
    $user_count = count($file_array);
    $i = 0;
    while($i < $user_count)
    {
        if(strcmp($login, $file_array[$i]["login"]) == 0)
        {
            if(strcmp(hash("whirlpool", $old_password), $file_array[$i]["password"]) == 0)
                return($i);
            else
                return(-1);
        }
        $i++;
    }
    return(-1);
}

function update_password($i)
{
    $user_credential_file_path = "../database/user_credential.txt";
    $new_passwrod = $_POST["new_password"];
    $file_array = unserialize(file_get_contents($user_credential_file_path));
    $file_array[$i]["password"] = hash("whirlpool",$new_passwrod);
    file_put_contents($user_credential_file_path, serialize($file_array));
}

function redirect_password_modified($user_index)
{
    $user_credential_file_path = "../database/user_credential.txt";
    $file_array = unserialize(file_get_contents($user_credential_file_path));
    header("refresh: 5; url=../index.php");
    echo("Password for user ".$file_array[$user_index]["login"]." changed succesfully<br>");
    echo("Redirecting to homepage in 5 seconds<br>");
}

/*
    ---main---
*/

    session_start();
    $user_index = get_valid_user_index();
    if($user_index >= 0)
    {
        update_password($user_index);
        redirect_password_modified($user_index);
    }
    else
        header("Location: modify_password_invalid.html");
?>