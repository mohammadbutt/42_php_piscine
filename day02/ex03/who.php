#!/usr/bin/php
<?php
/*
    References:
    https://en.wikipedia.org/wiki/Who_(Unix)
    https://en.wikipedia.org/wiki/W_(Unix)
    https://www.freebsd.org/cgi/man.cgi?date
    https://stackoverflow.com/questions/4103287/read-a-plain-text-file-with-php
    https://teamtreehouse.com/library/reading-files-into-a-string-or-array
    
*/

function get_date()
{
    system("date >> date_info.txt");
    $date_file = fopen("date_info.txt", "r");
    $full_date = fgets($date_file);
    fclose($date_file);
    system("rm date_info.txt");
    $date_array = explode(" ", $full_date);
    $date_string = $date_array[1]." ".$date_array[2];
    return($date_string);
}

function print_w_info($w_string_line, $tty_string)
{
    $date_string = get_date();
    $w_string_line_array = preg_split("/\s+/", $w_string_line, -1, PREG_SPLIT_NO_EMPTY);
    $user = $w_string_line_array[0];
    $session = $w_string_line_array[1];
    $time = $w_string_line_array[3];
    if(strcmp($session, "console") == 0)
        $final_string = $user."\t ".$session."  ".$date_string." ".$time."\n";
    else
        $final_string = $user."\t ".$tty_string.$session."  ".$date_string." ".$time."\n";
    echo($final_string);
}
function get_w()
{   
    system("w >> w_info.txt");
    $w_file = fopen("w_info.txt", "r");
    $w_array = array();
    while(!feof($w_file))
        $w_array[] = fgets($w_file);
    fclose($w_file);
    system("rm w_info.txt");
    $header_row_array = preg_split("/\s+/", $w_array[1], -1, PREG_SPLIT_NO_EMPTY);
    $tty_string = strtolower($header_row_array[1]);
    $w_array_count = count($w_array);
    $i = 2;
    while($i < $w_array_count - 1)
        print_w_info($w_array[$i++], $tty_string);
}
    get_w();
?>