<?php

function update_password($file, $i)
{
    $new_Password = $_POST["newpw"];
    $file_path = "../htdocs/private/passwd";
    $new_password = $_POST["newpw"];
    $file[$i]["passwd"] = hash("whirlpool", $new_password);
    file_put_contents($file_path, serialize($file));
    echo("OK\n");
}
    $login = $_POST["login"];
    $old_password = $_POST["oldpw"];
    $submit = $_POST["submit"];
    if($login === "" || $old_password === "" || $new_password === "" || strcmp($submit, "OK") != 0)
    {
        echo("ERROR\n");
        return(0);
    }
    $file_path = "../htdocs/private/passwd";
    $i = 0;
    $file = unserialize(file_get_contents($file_path));
    $user_count = count($file);
    while($i < $user_count)
    {   
        if(strcmp($file[$i]["login"], $login) == 0)
        {
            if(strcmp($file[$i]["passwd"], hash("whirlpool", $old_password)) == 0)
            {
                update_password($file, $i);
                return(0);
            }
            else
            {
                echo("ERROR\n");
                return(0);
            }
        }
        $i++;
    }
    echo("ERROR\n");
?>