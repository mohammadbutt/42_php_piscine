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
    $item_name = $_POST["item"];
    $price = 0;
    if(strcmp($item_name, "laptop_acer") == 0)
        $price = 1199;
    else if(strcmp($item_name, "laptop_msi") == 0)
        $price = 949;
    else if(strcmp($item_name, "mobile_iphone") == 0)
        $price = 599;
    else if(strcmp($item_name, "mobile_moto") == 0)
        $price = 299;
    else if(strcmp($item_name, "tablet_galaxy") == 0)
        $price = 299;
    else if(strcmp($item_name, "tablet_ipad") == 0)
        $price = 329;
    return($price);
}

function put_items_in_cart()
{
    $price = get_item_price();
    $logged_user = get_whoami();
    $cart_file_path = "05_cart/".$logged_user.".txt";
    $item_name = $_POST["item"];
    if(file_exists($cart_file_path) == true)
        $file_array = unserialize(file_get_contents($cart_file_path));
    $i = 0;
    $item_count = count($file_array);
    if($item_count > 0)
    {
        while($i < $item_count)
        {
            if(strcmp($file_array[$i]["item"], $item_name) == 0)
            {
                $file_array[$i]["quantity"] = $file_array[$i]["quantity"] + 1;
                file_put_contents($cart_file_path, serialize($file_array));
                return(0);
            }
            $i++;
        }
    }
    $file_array[] = array("item" => $item_name, "quantity" => 1, "price" => $price);
    file_put_contents($cart_file_path, serialize($file_array));
    return(0);
}

/*
    main:
*/

    session_start();
    $logged_user = get_whoami();

    if(strcmp($logged_user, "") == 0)
    {
        header("refresh: 5; url=index.html");
        echo("Please sign in to add items to cart<br>");
        echo("Redirecting in 5 seconds<br>");
    }
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