<?php

function update_password($file, $i)
{
    $file_path = "../htdocs/private/passwd";
    $new_password = $_POST["newpw"];
    $file[$i]["passwd"] = hash("whirlpool", $new_password);
    file_put_contents($file_path, serialize($file));
    echo("OK\n");
}
    $login = $_POST["login"];
    $old_password = $_POST["oldpw"];
    $submit = $_POST["submit"];
    $new_password = $_POST["newpw"];
    if(strcmp($login, "") == 0 || strcmp($old_password, "") == 0 || strcmp($new_password, "") == 0 || strcmp($submit, "OK") != 0)
    {
        echo("ERROR\n");
        return(0);
    }
    echo("Comes here\n");
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