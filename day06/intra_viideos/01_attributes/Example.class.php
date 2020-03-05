<?php

class Example
{
    public $foo = 0;

    function __construct()
    {
        echo("Calling contruct\n\n");
    }

    function __destruct()
    {
        echo("\nCalling destruct\n");
    }

    function bar()
    {
        echo("Calling bar method\n");
    }
}

    $instance = new Example();
    echo('$instance->foo: '.$instance->foo."\n");
    $instance->foo = 42;
    echo('$instance->foo: '.$instance->foo."\n");
    $instance->bar();

?>