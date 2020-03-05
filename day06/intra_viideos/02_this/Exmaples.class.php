<?php

class Example
{
    public $foo = 0;

    function __construct()
    {
        echo('constructor called'."\n\n");
        echo('$this->foo: ' . $this->foo . "\n");
        $this->foo = 42;
        echo('$this->foo: ' . $this->foo . "\n");
        $this->bar();
    }
    
    function __destruct()
    {
        echo("\nDestructor called\n");
    }

    function bar()
    {
        echo("bar method called\n");
    }
}

    $instance = new Example();

?>