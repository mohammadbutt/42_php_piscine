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

function delete_account($i)
{
    $user_credential_file_path = "../database/user_credential.txt";
//    $login = $_POST["login"];
//    $password = $_POST["password"];
    $file_array = unserialize(file_get_contents($user_credential_file_path));
    unset($file_array[$i]);
//    unset($file_array[$i]["login"]);
//    unset($file_array[$i]["password"]);
    $file_array_reindexed = array_values($file_array);
    file_put_contents($user_credential_file_path, serialize($file_array_reindexed));
}

/*
    main
*/

    session_start();
    $user_index = get_valid_user_index();
//    echo($user_index)."<br>";
    if($user_index >= 0)
    {
        delete_account($user_index);
        echo("User ".$_POST["login"]." deleted succefully<br>");
    }
    else
        header("Location: delete_account_invalid.html");

?>