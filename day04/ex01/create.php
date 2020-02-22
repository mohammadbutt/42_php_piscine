<?php
/*
    Reference:
    https://www.youtube.com/watch?v=8-r7zNZ8kng
    https://stackoverflow.com/questions/9671659/php-is-null-and-null/9671787#9671787
    Eli the Computer Guy - https://www.youtube.com/watch?v=QmBSijbgTwE

*/

function create_directories()
{
    $htdocs_path = "../htdocs";
    $private_path = "/private";
    $full_path = $htdocs_path.$private_path;
    if(file_exists($htdocs_path) == false && file_exists($full_path) == false)
    {
        mkdir($htdocs_path);
        mkdir($full_path);
    }
}

    create_directories();
    $file_path = "../htdocs/private/passwd";
    $login = $_POST["login"];
    $password = $_POST["passwd"];
    $submit = $_POST["submit"];
    if($login !== NULL && $password !== NULL && strcmp($submit, "OK") == false)
    {
//        $new_user_credentials = serialize(array("login" => $login, "passwd" => hash("whirlpool", $password)));
//        $new_user_credentials = array("login" => $login, "passwd" => hash("whirlpool", $password));
        $new_user_credentials = serialize(array("login" => $login, "passwd" => hash("whirlpool", $password)));

        file_put_contents($file_path, $new_user_credentials, FILE_APPEND);
//        $user_credentials_array[] = unserialize(file_get_contents($file_path));
        echo("OK\n");
    }
   else
       echo("ERROR\n");
    $unserialized_file = unserialize(file_get_contents($file_path));
//    foreach($unserialized_file as $user)
//        echo($user["login"]);
    print_r($unserialized_file);
//    foreach($unserialized_file as $user)
//        echo($user["login"])."\n";
//    $file_serialized = file_get_contents($file_path);
//    $i = 0;
//    while(feof(deserialize($file_serialized)))
//    {
//        print_r(deserialize($file_serialized));
//    }
//    $file_unserialized = unserialize($file_serialize);
//    echo(($file_serialized)."\n\n");
//    print_r(($file_serialized));
//    foreach(file_get_contents($file_path) as $value)
//        print_r($value["login"]);
// print_r(unserialize(file_get_contents($file_path)));
//file_put_contents($file_path, serialize("Add line 1")."\n", FILE_APPEND);
?>