#!/usr/bin/php
<?php
    if($argc != 2)
        return(0);
    $i = 0;
    $str_array = preg_split('/\s+/', $argv[1], -1, PREG_SPLIT_NO_EMPTY);
    $final_str = "";
    $word_count = count($str_array);
    if($word_count > 0)
        $final_str = $final_str.$str_array[$i++];
    while($i < $word_count)
        $final_str = $final_str." ".$str_array[$i++];
    if($word_count > 0)
        echo($final_str)."\n";
?>