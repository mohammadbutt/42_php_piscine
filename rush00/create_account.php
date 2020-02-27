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

function does_login_exist()
{
    $user_credential_file_path = "database/user_credential.txt";
    $login = $_POST["login"];
    if(file_exists($user_credential_file_path) == false)
        return(false);
    $file_array = unserialize(file_get_contents($user_credential_file_path));
    $user_count = count($file_array);
    $i = 0;
    while($i < $user_count)
        if(strcmp($login, $file_array[$i++]["login"]) == 0)
            return(true);
    return(false);
}

function redirect_account_exists()
{
    header("Location: create_account_exists.html");
}

function redirect_account_created()
{
    header("refresh: 5; url=create_account.html");
    echo(str_repeat("&nbsp;", 9));
    echo("Account created succesfully<br>");
    echo("Redirecting to homepage in 5 seconds<br>");
}

function create_new_account()
{
    create_directories();
    $user_credential_file_path = "database/user_credential.txt";
    $login = $_POST["login"];
    $password = $_POST["password"];
    $submit = $_POST["submit"];
    if(strcmp($submit, "OK") == 0 && does_login_exist() == false)
    {
        if(file_exists($user_credential_file_path) == true)
            $file_array = unserialize(file_get_contents($user_credential_file_path));
        $file_array[] = array("login" => $login, "password" => hash("whirlpool", $password));
        file_put_contents($user_credential_file_path, serialize($file_array));
        redirect_account_created();
    }
    else
        redirect_account_exists();

}

/*
    --- main ---
*/

    session_start();
//    echo("Does it run<br>");
    create_new_account();
?>