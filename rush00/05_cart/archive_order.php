<?php

function get_whoami()
{
    return($_SESSION["logged_in_user"]);
}

function get_date_time()
{
    date_default_timezone_set("America/Los_Angeles");
    $date_struct = DateTime::createFromFormat("Y-m-d", date('Y-m-d'));
    $date_time = $date_struct->format('M d Y g:i:sa');
    return($date_time);
}

function get_arhive_date_time()
{
    date_default_timezone_set("America/Los_Angeles");
    $date_struct = DateTime::createFromFormat("Y-m-d", date('Y-m-d'));
    $date_time = $date_struct->format('m-d-Y-g-i-s-a');
    return($date_time);
}

function archive_order()
{
    $current_user = get_whoami();
    $file_path = $current_user.".txt";
    $date_time = get_date_time();
    $arhive_date_time = get_arhive_date_time();
    if(file_exists($file_path) == true)
    {
        $file_array = unserialize(file_get_contents($file_path));
        $i = 0;
        $count = count($file_array);
        $file_array[$count] = array("date" => $date_time);
        file_put_contents($file_path, serialize($file_array));
        system("mv $file_path $current_user.$arhive_date_time");
    }
}
    session_start();
    archive_order();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
    body
    {
        background-color: rgb(233, 255, 248);
    }
</style>
<body>
    <?php
        if(strcmp(get_whoami(), "") == 0)
            echo("<h3>Please sign in to place an order</h3>");
        else
            echo("<h3>Order placed successfully</h3>");
        
    ?>
    <h3>Redirecting to homepage in 3 seconds</h3><br>
    <meta http-equiv="refresh" content="3; url=../index.php" />

</body>
</html>