<?php

/*
    References:
    https://www.youtube.com/watch?v=5YaF8xTmxs4&t=736s - Derek Banas Object Oriented PHP - 18:32
    
    Interfaces are just contracts that says that any class that implements
    an interface must define the functions that are inside of the interface.

    So when a class implements an interface, then that class is forced to define that function.
*/

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