<?php
/*
    References:
    https://stackoverflow.com/questions/722379/can-html-be-embedded-inside-php-if-statement/38391978#38391978
    https://stackoverflow.com/questions/5673269/what-is-the-advantage-of-using-heredoc-in-php/5673478#5673478
    https://andy-carter.com/blog/what-are-php-heredoc-nowdoc
    https://stackoverflow.com/questions/13882656/html-form-in-php-while-loop

    Notes:  1. Use heredoc syntax to embed html code inside php.
            2. seperate html file is created just for layout.
            3. header will be removed.

*/

function get_whoami()
{
    return($_SESSION["logged_in_user"]);
}
    session_start();
    $current_user = $_SESSION["logged_in_user"];
//    if(strcmp($_POST["place_order"], "OK") == true)
//        archive_order();
?>

<!DOCTYPE html>
<!--
    References:
    https://www.w3schools.com/html/html_form_input_types.asp
    https://www.w3schools.com/html/html_tables.asp
    https://stackoverflow.com/questions/932653/how-to-prevent-buttons-from-submitting-forms
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
    .user_placeholder
    {
        font-size: 25px;
        font-weight: bold;
        text-align: right;
    }
    .cart
    {
        font-size: 25px;
        font-weight: bold;
        float: left;
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
    .quantity_button
    {
        font-size: 20px;
        border-radius: 20px;
        font-weight: bold;
    }
    .subtract_button:hover
    {
        background: rgb(255, 36, 73);
    }
    .add_button:hover
    {
        background: rgb(125, 247, 101);
    }
    .order_button
    {
        font-size: 15px;
        border-radius: 15px;
        text-align: center;
    }

    .order_button:hover
    {
        background: rgb(125, 247, 101);
    }

</style>
<body>
    <h1>42 E-site</h1>

    <p class="user_placeholder">
        <?php
            echo($current_user);
        ?>
        <span class="cart">Shopping cart</span>
    </p>
    <table style="width: 100%">
        <tr>
            <th>Item Name</th>
            <th>Quantity</th>
            <th>Price</th>
            <th>Change quantity</th>
        </tr><br>
        <?php
        // --- php script begins here ---
            $i = 0;
            $file_path = $current_user.".txt";
            if(file_exists($file_path) == true)
                $file_array = unserialize(file_get_contents($file_path));
            $array_count = count($file_array);
            while($i < $array_count)
            {
                $item = $file_array[$i]["item"];
                $quantity = $file_array[$i]["quantity"];
                $price = $quantity * $file_array[$i]["price"];
                $total_price = $price + $total_price;
        // --- php script ends pauses here ---
        ?>
        <tr>
            <th><?php echo($item); ?></th>
            <th><?php echo($quantity); ?></th>
            <th><?php echo('$ '.number_format($price)); ?></th>
            <form action="change_quantity.php" method="POST">
                <th>
                    <button class="add_button quantity_button" type="submit" name="item" value="<?php echo($item." +"); ?>">+</button>
                    <button class="subtract_button quantity_button" type="submit" name="item" value="<?php echo($item." -"); ?>">-</button>
                </th>
            </form>
        </tr>
        <?php
        // --- php script resumes here ---
            $i++;
            }
        //--- php script ends here ---
        ?>
        <tr>
            <th style="text-align: left">Total: <?php echo('$ '.number_format($total_price)); ?></th>
        </tr>
        <tr>
            <form action="archive_order.php" method="POST">
                <th>
                    <button class="order_button" type="submit" name="place_order" on_click="">Place Order</button>
                </th>
            </form>
        </tr>
    </table>
</body>
</html>

