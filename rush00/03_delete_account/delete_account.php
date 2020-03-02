<?php

/*
    References:
    https://www.geeksforgeeks.org/removing-array-element-and-re-indexing-in-php/
*/

/*
    Functions:
*/

function get_valid_user_index()
{
    $user_credential_file_path = "../database/user_credential.txt";
    $login = $_POST["login"];
    $password = $_POST["password"];
    if(file_exists($user_credential_file_path) == false)
        return(-1);
    $file_array = unserialize(file_get_contents($user_credential_file_path));
    $user_count = count($file_array);
    $i = 0;
    while($i < $user_count)
    {
        if(strcmp($login, $file_array[$i]["login"]) == 0)
        {
            if(strcmp(hash("whirlpool", $password), $file_array[$i]["password"]) == 0)
                return($i);
            else
                return(-1);
        }
        $i++;
    }
    return(-1);
}

function redirect_account_deleted($user_index)
{
    $user_credential_file_path = "../database/user_credential.txt";
    $file_array = unserialize(file_get_contents($user_credential_file_path));
    header("refresh: 5; url=../index.php");
    echo("User ".$_POST["login"]." account deleted successfully<br>");
    unset($_SESSION["login"]);
    unset($_SESSION["logged_in_user"]);
    echo("Redirecting to homepage in 5 seconds<br>");
}

function delete_account($i)
{
    $user_credential_file_path = "../database/user_credential.txt";
    $file_array = unserialize(file_get_contents($user_credential_file_path));
    unset($file_array[$i]);
    $file_array_reindexed = array_values($file_array);
    file_put_contents($user_credential_file_path, serialize($file_array_reindexed));
}

/*
    main
*/

    session_start();
    $user_index = get_valid_user_index();
    if($user_index >= 0)
    {
        delete_account($user_index);
        redirect_account_deleted($user_index);
    }
    else
        header("Location: delete_account_invalid.html");

?>