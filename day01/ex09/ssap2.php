#!/usr/bin/php
<?php
function ft_split($str)
{
    $str_array = preg_split('/\s+/', $str, -1, PREG_SPLIT_NO_EMPTY);
    return($str_array);
}

function is_digit($char)
{
    if($char >= '0' && $char <= '9')
        return(true);
    return(false);
}

function is_symbol($char)
{
    if(($char <= 47) || ($char >= 58 && $char <= 64) || ($char >= 91 && $char <= 96) || ($char >= 123))
        return(true);
    return(false);
}

function calculate_ascii($char)
{
    $ascii_value = ord($char);
    if($ascii_value == 0)
        return($ascii_value);
    if(ctype_upper($char) == true)
        $ascii_value = $ascii_value + 32;
    else if(is_digit($char) == true)
        $ascii_value = $ascii_value + 100;
    else if(is_symbol($ascii_value) == true)
        $ascii_value = $ascii_value + 1000;
    return($ascii_value);
}

function ssap2_compare($str1, $str2)
{
    $len1 = strlen($str1);
    $len2 = strlen($str2);
    $i = 0;
    $len = 0;
    if($len1 < $len2)
        $len = $len1;
    else
        $len = $len2;
    while($i < $len)
    {
        $str1_ascii = calculate_ascii($str1[$i]);
        $str2_ascii = calculate_ascii($str2[$i]);
        if($str1_ascii != $str2_ascii)
        {
            if($str1_ascii < $str2_ascii)
                return(-1);
            else if($str1_ascii > $str2_ascii)
                return(1);
        }
        $i++;
    }
    if($len1 < $len2)
        return(-1);
    else if($len1 > $len2)
        return(1);
    else if($len1 == $len2)
        return(0);
}

    if($argc == 1)
    return(0);
    $i = 1;
    $full_array = array();
    while($i < $argc)
    $full_array = array_merge($full_array, ft_split($argv[$i++]));

    usort($full_array, "ssap2_compare");
    foreach($full_array as $value)
        echo($value)."\n";
?>