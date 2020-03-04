<?php
/*
    To execute any php code without chmod or including !#/bin/usr/php, we can also simply do any of the following;
    php -f file_name.php
        or
    php file_name.php
*/

class Exmaple
{
    function __construct()
    {
        echo("Printing text from constructor\n");
    }

    function __destruct()
    {
        echo("Printing text from destructor\n");
    }
}

    $instance = new Exmaple();

?>