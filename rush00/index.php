<?php
/*
    References:
    Notes:
*/
/*
    functions:
*/

function get_whoami()
{
    return($_SESSION["logged_in_user"]);
}

function get_item_price()
{

}

function put_items_in_cart()
{
    $price = get_item_price();
}

/*
    main:
*/
session_start();
$logged_user = get_whoami;
if(strcmp($logged_user, "") == 0)
    header("Location: index.html");
else
{
    put_items_in_cart();
    header("Location: index.html");
}
/*
if(strcmp($logged_user, "") != 0)
{

}
*/
//header("Location: index.html");
//echo($_SESSION["logged_in_user"])."\n"; works
// index.html will likely be removed to use heredoc syntax inside index.php
?>