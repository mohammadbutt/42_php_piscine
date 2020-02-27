<?php
/*
    References:
    https://stackoverflow.com/questions/18305258/display-message-before-redirect-to-other-page
*/

/*
    --- functions ---
*/
function create_directories()
{
    $directory_path = "database/";
    if(file_exists($directory_path) == false)
    {
        mkdir($directory_path);
    }
}

function is_login_valid()
{
    $user_credential_file_path = "database/user_credential.txt";
    $login = $_POST["login"];
    if(file_exists($user_credential_file_path) == false)
        return(true);
    $file_array = unserialize(file_get_contents($user_credential_file_path));
    $user_count = count($file_array);
    $i = 0;
    while($i < $user_count)
        if(strcmp($login, $file_array[$i++]["login"]) == 0)
            return(false);
    return(true);
}

function redirect_message($message)
{
    header("refresh:5; url=create_account.html");
//    echo("Login with this name already exists<br>");
    echo("Redirecting in 5 seconds<br>");
    echo($message);
}

function create_new_account()
{
    create_directories();
    $user_credential_file_path = "database/user_credential.txt";
    $login = $_POST["login"];
    $password = $_POST["password"];
    $submit = $_POST["submit"];
    if($login === "" || $password === "")
    {
        redirect_message("Can not have empty login or password");
    //    echo("Can not have empty login or password\n");
    }
    else if(strcmp($submit, "OK") == 0 && is_login_valid() == true)
    {
        if(file_exists($user_credential_file_path) == true)
            $file_array = unserialize(file_get_contents($user_credential_file_path));
        $file_array[] = array("login" => $login, "password" => hash("whirlpool", $password));
        file_put_contents($user_credential_file_path, serialize($file_array));
        echo("Login created successfully\n");
    }
    else
    {
        redirect_message("Login with this name already exists");
//        header("refresh:5; url=create_account.html");
//        echo("Login with this name already exists<br>");
//        echo("Redirecting in 5 seconds");
//        exit();
    }

}

/*
    --- main ---
*/

    session_start();
    create_new_account();
?>