#!/usr/bin/php
<?php
include('../ex03/ft_split.php');
    if($argc == 1)
        return(0);
    $i = 0;
    $count = 1;
    $final_str = "";
    $str_array = array();
    while($count < $argc)
        $str_array = array_merge($str_array, ft_split($argv[$count++]));
    $word_count = count($str_array);
    sort($str_array);
    while($i < $word_count)
        $final_str = $final_str.$str_array[$i++]."\n";
    echo($final_str);
?>