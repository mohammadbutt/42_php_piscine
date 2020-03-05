<?php

/*
    Function overloading is performed differently in php than other programming languages.
    There's a trick to overloading a function in php.
    1. Pass in an array.
    2. Or put multiple if else statmenets that gives the impression of function overload.
*/

Class Exmaple
{
    public $att1 = 0;
    public $att2 = 0;
    public $att3 = 0;

    public function __construct(array $kwargs)
    {
        echo("Constructor called\n\n");

        if(array_key_exists('arg1', $kwargs) == true)
            $this->att1 = $kwargs['arg1'];
        else
            $this->att1 = -1;
        
        $this->att2 = $kwargs['arg2'];

        if(array_key_exists('arg3', $kwargs) == true)
            $this->att3 = $kwargs['arg3'];
        else
            $this->att3 = $this->att1;
        echo('$this->att1: ' . $this->att1 . "\n");
        echo('$this->att2: ' . $this->att2 . "\n");
        echo('$this->att3: ' . $this->att3 . "\n"); 

    }

    public function __destruct()
    {
        echo("\nCalling destructor\n");
    }
    public function __toString()
    {
        echo("THis is a test\n");
    }
}

$instance = new Exmaple(array ('arg1' => 53, 'arg2' => 42, 'arg3' => 31));
//$instance = new Exmaple(array('arg3' => 31, 'arg2' => 42, 'arg1' => 53));
//$instance = new Exmaple(array('arg2' => 42));
//$instance = new Exmaple(array("arg3" => 31, "arg2" => 42));

?>