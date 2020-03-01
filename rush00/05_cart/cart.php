<?php
/*
    References:
    https://stackoverflow.com/questions/722379/can-html-be-embedded-inside-php-if-statement/38391978#38391978
    https://stackoverflow.com/questions/5673269/what-is-the-advantage-of-using-heredoc-in-php/5673478#5673478
    https://andy-carter.com/blog/what-are-php-heredoc-nowdoc

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
-->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cart</title>
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
</style>
<body>
    <h1>42 E-site</h1>

    <p class="user_placeholder">
        <?php
        echo($current_user);
        ?>
        <span class="cart">Shopping cart</span>
    </p>
</body>
</html>