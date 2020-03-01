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
 //   header("Location: cart.html");
    session_start();
    $current_user = $_SESSION["logged_in_user"];

?>

<!DOCTYPE html>
<!--
    References:
    https://www.w3schools.com/html/html_form_input_types.asp
    https://www.w3schools.com/html/html_tables.asp
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
    .remove_button
    {
        font-size: 15px;
        border-radius: 15px;
    }
    .remove_button:hover
    {
        background: rgb(255, 36, 73);
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
            $i = 0;
            $file_path = $current_user.".txt";
            $file_array = unserialize(file_get_contents($file_path));
            $array_count = count($file_array);
            while($i < $array_count)
            {
                $item = $file_array[$i]["item"];
                $quantity = $file_array[$i]["quantity"];
                $price = $quantity * $file_array[$i]["price"];
                $total_price = $price + $total_price;
        ?>
        <tr>
            <th><?php echo($item); ?></th>
            <th><?php echo($quantity); ?></th>
            <th><?php echo('$ '.number_format($price)); ?></th>
            <form action="#" method="POST">
                <th>
                    <button class="remove_button" type="submit" name="item" value="<?php echo($item); ?>">Remove Item</button>
                </th>
            </form>
        </tr>
        <?php
            $i++;
            }
        ?>
        <tr>
            <th style="text-align: left">Total: <?php echo('$ '.number_format($total_price)); ?></th>
        </tr>
        <!-- Above done -->
    </table>
</body>
</html>

