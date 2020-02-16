#!/usr/bin/php
<?php
/*
    asterik '*' is a special symbol since it is used as a wildcard.
    so if not wrapped in double qutation marks "", we need a backslash \
    before asterik '*', like so \* in the terminal.
*/
function ft_split($str)
{
    $str_array = preg_split('/\s+/',$str, -1, PREG_SPLIT_NO_EMPTY);
    return($str_array);
}

function do_op($num_1, $operator, $num_2)
{
    if($operator[0] == '+')
        $result = $num_1 + $num_2;
    else if($operator[0] == '-')
        $result = $num_1 - $num_2;
    else if($operator[0] == '*')
        $result = $num_1 * $num_2;
    else if($operator[0] == '/')
        $result = $num_1 / $num_2;
    else if($operator[0] == '%')
        $result = $num_1 % $num_2;
    return($result);
}

    if($argc != 4)
    {
        echo("Incorrect Parameters")."\n";
        return(0);
    }
    $num_1 = ft_split($argv[1])[0];
    $operator = ft_split($argv[2])[0];
    $num_2 = ft_split($argv[3])[0];
    $result = do_op($num_1, $operator, $num_2);
    echo($result)."\n";
?>