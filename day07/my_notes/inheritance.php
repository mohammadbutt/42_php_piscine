<?php

Class ParentClass
{
    public function print_hello()
    {
        echo("->Hello from parent\n\n");
    }
}

Class ChildClass extends ParentClass
{
    // Inheritance
}

Class ChildClassMethodOverride extends ParentClass
{
    // Inheritance that also implements Method override
    public function print_hello()
    {
        echo("->Hello from child\n");
    }
}

    $parent = new ParentClass();
    echo("Parent Class\n");
    $parent->print_hello();

    $child = new ChildClass();
    echo("Child Class that inherits from parent class\n");
    $child->print_hello();

    $childMethodOverride = new ChildClassMethodOverride();
    echo("Child Class that inherits from parents class and overrides method\n");
    $childMethodOverride->print_hello();
?>