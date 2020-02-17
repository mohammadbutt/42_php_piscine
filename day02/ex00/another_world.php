#!/usr/bin/php
<?php

function is_space($c)
{
    if($c == ' ' || $c == '\t' || $c == '\n' || $c == '\v' || $c == '\f' || $c == '\r')
        return(true);
    return(false);
}

function ft_substr($source, $i)
{
    $dest = "";
    $j = 0;
    if($source)
        while(isset($source[$i]) && is_space($source[$i]) == false)
            if(is_space($source[$i]) == false)
                $dest[$j++] = $source[$i++];
    return($dest);
}

function ft_strlen($str)
{
    $i = 0;
    while(isset($str[$i]))
        $i++;
    return($i);
}

function ft_split($str)
{
    $i = 0;
    $a = 0;
    $str_array = array();
    while(isset($str[$i]))
    {
        while(isset($str[$i]) && is_space($str[$i]) == true)
            $i++;
        if( isset($str[$i]) && is_space($str[$i]) == false)
        {
            $str_array[$a] = ft_substr($str, $i);
            $i = $i + ft_strlen($str_array[$a++]);
        }
    }
    return($str_array);
}

    if($argc < 2)
        return(0);
    $str_array = ft_split($argv[1]);
    $i = 0;
    $word_count = count($str_array);
    while($i < $word_count - 1)
        echo($str_array[$i++])." ";
    if($word_count > 0)
        echo($str_array[$i])."\n";
?>