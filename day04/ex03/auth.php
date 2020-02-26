<?php
function auth($login, $passwd)
{   
    $i = 0;
    $file_path = "../htdocs/private/passwd";
    $file_array = unserialize(file_get_contents($file_path));
    $user_count = count($file_array);
    while($i < $user_count)
    {
        $saved_login = $file_array[$i]["login"];
        $saved_passwd = $file_array[$i]["passwd"];
        if(strcmp($saved_login, $login) == 0 && strcmp($saved_passwd, hash("whirlpool", $passwd)) == 0)
            return(true);
        $i++;
    }
    return(false);
}
?>