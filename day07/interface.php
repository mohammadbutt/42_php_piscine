<?php

interface BluePrint
{
    // We just protype the method and we dont tell it what it does
    // Class that implement BluePrint interface will fill in these methods or functions.
    public function sayHello();
}

Class ParentClass implements BluePrint
{
    public function sayHello()
    {
        echo("Hello from parent class\n");
    }
}

Class ChildClass implements BluePrint
{
    public function sayHello()
    {
        echo("Hello from child class\n");
    }
}

    $parent = new ParentClass();
    $parent->sayHello();

    $child = new ChildClass();
    $child->sayHello();

?>