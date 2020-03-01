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
    if(strcmp($logged_user, "") != 0)
        put_items_in_cart();
?>

<!DOCTYPE html>
<!--
    ---------------------------------------HTML-----------------------------------------------
    References:
    https://www.w3schools.com/html/html_form_input_types.asp
    https://stackoverflow.com/questions/14007613/change-text-from-submit-on-input-tag/14007619

-->

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>index.html</title>
</head>
<style>
    body
    {
        background-color: rgb(233, 255, 248);
    }
    h1
    {
        text-align: center;
    }
    p
    {
        font-size: 25px;
        font-weight: bold;
        text-align: right;
    }
    form
    {
        border-radius: 10px;
        border: 5px solid rgb(0, 0, 0);
        padding: 5px;
        overflow: hidden;
    }
    img
    {
        width: 300px;
        display: block;
        margin-left: auto;
        margin-right: auto;
    }

    .item_description
    {
        text-align: center;
    }

    .cart_button
    {
        font-size: 15px;
        border-radius: 10px;
    }
    .cart_button:hover
    {
        background: yellow;
    }
</style>
<body>
    <h1>42 E-site</h1>
    <p>Hello <?php echo($_SESSION["logged_in_user"]); ?></p>
    <table>
        <tr>
            <td><a href="00_registration/create_account.html">Create Account</a></td>
        </tr>
        <tr>
            <td><a href="01_login/login_account.html">Sign-In</a></td>
        </tr>
        <tr>
            <td><a href="02_modify_password/modify_password.html">Change Password</a></td>
        </tr>
        <tr>
            <td><a href="03_delete_account/delete_account.html">Delete Account</a></td>
        </tr>
        <tr>
            <td><a href="04_logout/logout.php">Sign-Out</a></td>
        </tr>
        <tr>
            <td><a href="05_cart/cart.php">Shopping Cart</a></td>
        </tr>
    </table>

    <form action="index.php" method="POST">
        <div class="laptop_acer">
            <img class="laptop_acer_image" src="database/laptop/acer_helios_3000.jpg" alt="image of acer laptop">
            <div class="item_description">
                <h2>Acer Predator Helios 300 Gaming Laptop</h2>
                <h2>Price $1,199.99<h2>
                <button class="cart_button" type="submit" name="item" value="laptop_acer">Add to Cart</button>
            </div>
        </div>
    </form>
    <br>

    <form action="index.php" method="POST">
        <div class="laptop_msi">
            <img class="laptop_msi_image" src="database/laptop/msi_gf63.jpg" alt="image of MSI laptop">
            <div class="item_description">
                <h2>MSI GF63 Thin 9SC-066 15.6" Gaming Laptop</h2>
                <h2>Price $949.99<h2>
                <button class="cart_button" type="submit" name="item" value="laptop_msi">Add to Cart</button>
            </div>
        </div>
    </form>
    <br>

    <form action="index.php" method="POST">
        <div class="mobile_iphone">
            <img class="mobile_iphone_image" src="database/mobile/iphone_xr1.jpg" alt="image of iphone mobile">
            <div class="item_description">
                <h2>Apple iPhone XR 64GB</h2>
                <h2>Price $599.00</h2>
                <button class="cart_button" type="submit" name="item" value="mobile_iphone">Add to Cart</button>
            </div>
        </div>
    </form>
    <br>

    <form action="index.php" method="POST">
        <div class="mobile_moto">
            <img class="mobile_moto_image" src="database/mobile/moto_g7.jpg" alt="image of Moto 7 phone">
            <div class="item_description">
                <h2>Motorola Moto G7 64GB</h2>
                <h2>Price $299.99</h2>
                <button class="cart_button" type="submit" name="item" value="mobile_moto">Add to Cart</button>
            </div>
        </div>
    </form>
    <br>

    <form action="index.php" method="POST">
        <div class="tablet_galaxy">
            <img class="tablet_galaxy_image" src="database/tablet/galaxy_tab_a_10.jpg" alt="image of Samsung Tablet">
            <div class="item_description">
                <h2>Samsung Galaxy Tab A (10.1 64 GB)</h2>
                <h2>Price $299.99</h2>
                <button class="cart_button" type="submit" name="item" value="tablet_galaxy">Add to Cart</button>
            </div>
        </div>
    </form>
    <br>

    <form action="index.php" method="POST">
        <div class="tablet_ipad">
            <img class="tablet_ipad_image" src="database/tablet/ipad_7.jpg" alt="image of ipad Tablet">
            <div class="item_description">
                <h2>New Apple iPad (10.2-Inch, Wi-Fi, 128GB)</h2>
                <h2>Price $329.99</h2>
                <button class="cart_button" type="submit" name="item" value="tablet_ipad">Add to Cart</button>
            </div>
        </div>
    </form>
    <br>
</body>
</html>