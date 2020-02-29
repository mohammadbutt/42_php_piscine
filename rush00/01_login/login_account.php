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
/*
function get_current_link()
{
    $actual_link = "";
    if(isset($_SERVER["HTTPS"]) && strcmp($_SERVER["HTTPS"], "on") == 0)
        $actual_link = $actual_link."https";
    else
        $actual_link = $actual_link."http";
    
    $actual_link = $actual_link."://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    return($actual_link);
}

function get_current_link_with_login()
{
    $current_link = get_current_link();
    $current_link_with_login = $current_link."?login=".$_POST["login"];
    return($current_link_with_login);
}

function use_curl_to_store_user_session()
{
    $_SESSION["logged_in_user"] = $_POST["login"];
    $current_link_with_login = get_current_link_with_login();
//    system("curl -c cook_login_session.txt $current_link_with_login");
}
*/
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
//    $current_link = get_current_link();
    $_SESSION["logged_in_user"] = "";
    unset($_SESSION["logged_in_user"]);
//    system("curl -b cook_login_session.txt $current_link");

}

function call_to_login_html_page()
{
    exit;
}

/*
    ---main---
*/

    session_start();
    if(is_login_password_valid() == true)
    {
//        echo("This needs to redirect to home with user login id.<br>");
//        $current_link = get_current_link();
//        $current_link_with_login = $current_link."?login=".$_POST["login"];
//        echo($current_link."<br>");
//        echo($current_link_with_login."<br>");
//        system("curl -c cook.txt $current_link_with_login");
//        use_curl_to_store_user_session();
//        $_SESSION["logged_in_user"] = $_POST["login"];
        set_whoami();
        header("Location: ../index.html");
//        call_to_login_html_page();
//        echo("<br>Welcome ".get_whoami()." <br>");
//        ft_logout();
//        echo("<br>Welcome ".get_whoami()." <br>");
    }
    else
    {
        header("Location: login_account_invalid.html");
//        echo("Invalid login or password. Please Try again");
    }
//    ft_logout();
/*
    echo("1 echoing from ft_whoami()<br>");
    echo(get_whoami()."<br>");
    echo("Logout<br>");
    ft_logout();
    echo("2 echoing from ft_whoami()<br>");
    echo(get_whoami()."<br>");
*/    
?>