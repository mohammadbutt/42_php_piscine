#!/usr/bin/php
<?php
/*
    Reference:
    https://www.youtube.com/watch?v=8-r7zNZ8kng

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
    $str = "ok";
    if($str !== NULL)
        echo("ok\n");
?>