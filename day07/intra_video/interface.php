<?php

interface IExample
{
    function foo();
}

class Example implements IExample
{
    public function __construct()
    {
        echo("Constructor Exmaple called\n");
    }

    public function __destruct()
    {
        echo("Destructor Example called\n");
    }

    public function foo()
    {
        echo("Function foo\n");
    }
}

    $instance = new Example();

?>