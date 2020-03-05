<?php

Class Example
{
    public $publicFoo = 0;
    private $_privateFoo = "hello";

    function __construct()
    {
        echo("Construct called\n\n");

        echo('$this->publicFoo: ' . $this->publicFoo . "\n");
        $this->publicFoo = 42;
        echo('$this->publicFoo: ' . $this->publicFoo . "\n\n");

        echo('$this->_privateFoo: ' . $this->_privateFoo . "\n");
        $this->_privateFoo = 'world';
        echo('this->_privateFoo: ' . $this->_privateFoo . "\n\n");

        $this->publicBar();
        $this->_privateBar();
        return;
    }

    public function publicBar()
    {
        echo("publibBar method called\n");
    }

    private function _privateBar()
    {
        echo("_privateBar method called\n");
    }

    function __destruct()
    {
        echo("\nCalling destruct\n");
    }
}

    $instance = new Example();
    $instance->publicBar();
//    Example::publicBar();
?>
