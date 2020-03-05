<?php
/*
    References:
    https://www.php.net/manual/en/language.operators.type.php
    https://www.php.net/manual/en/internals2.opcodes.instanceof.php
*/
Class Tyrion
{
    public function sleepWith($partner_name)
    {
        if($partner_name instanceof Jaime)
            echo("Not even if I'm drunk !\n");
        else if($partner_name instanceof Sansa)
            echo("Let's do this.\n");
        else if($partner_name instanceof Cersei)
            echo("Not even if I'm drunk !\n");
    }
}

?>