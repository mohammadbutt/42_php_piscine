#!/usr/bin/php
<?php
    if($argc == 1)
        return(0);
    $i = 1;
    $final_str = "";
    $str_array = preg_split('/\s+/', $argv[1], -1, PREG_SPLIT_NO_EMPTY);
    $word_count = count($str_array);
    while($i < $word_count && $word_count > 1)
            $final_str = $final_str.$str_array[$i++].' ';
    if($word_count > 0)
        $final_str = $final_str.$str_array[0]."\n";
    echo($final_str);
?>