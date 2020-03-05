<?php

function add($value1, $value2)
{
    if(is_int($value1) == true && is_int($value2) == true)
        return($value1 + $value2);
    else if(is_double($value1) == true && is_double($value2) == true)
        return($value1 + $value2);
    else
        return($value1.$value2);
}

    echo(add(1, 3))."\n";
    echo(add("Hello ", "World"))."\n";
    echo(1 + 1.5);
?>