<?php
/*
    References: 
*/

/*
    functions
*/

function get_whoami()
{
    return($_SESSION["logged_in_user"]);
}


function increase_quantity($post_item)
{
    $file_path = get_whoami().".txt";
    if(file_exists($file_path) == false)
        return(0);
    $file_array = unserialize(file_get_contents("$file_path"));
    $i = 0;
    $item_count = count($file_array);
    while($i < $item_count)
    {
        if(strcmp($file_array[$i]["item"], $post_item) == 0)
        {
            $file_array[$i]["quantity"] = $file_array[$i]["quantity"] + 1;
            file_put_contents($file_path, serialize($file_array));
            return(0);
        }
        $i++;
    }
}


function decrease_quantity($post_item)
{
    $file_path = get_whoami().".txt";
    if(file_exists($file_path) == false)
        return(0);
    $file_array = unserialize(file_get_contents("$file_path"));
    $i = 0;
    $item_count = count($file_array);
    while($i < $item_count)
    {
        if(strcmp($file_array[$i]["item"], $post_item) == 0)
        {
            $file_array[$i]["quantity"] = $file_array[$i]["quantity"] - 1;
            if($file_array[$i]["quantity"] == 0)
            {
                unset($file_array[$i]);
                $file_array_reindexed = array_values($file_array);
                file_put_contents($file_path, serialize($file_array_reindexed));
                return(0);
            }
            file_put_contents($file_path, serialize($file_array));
            return(0);
        }
        $i++;
    }
}

/*
    main
*/
    session_start();
    $current_user = get_whoami();
    $item = $_POST["item"];
    $item_array = explode(" ", $item);
//    echo("Comes here<br>");
    if($item_array[1][0] == '+')
        increase_quantity($item_array[0]);
    else if($item_array[1][0] == '-')
        decrease_quantity($item_array[0]);
    header("Location: cart.php");          
//    echo($item_array[0]."<br>");
//    echo($item_array[1][0]."<br>");

//    echo($_POST["item"])."<br>";
?>