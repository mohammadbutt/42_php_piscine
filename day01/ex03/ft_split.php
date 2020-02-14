<?php
/*
references:
https://stackoverflow.com/questions/1792950/explode-string-by-one-or-more-spaces-or-tabs
https://stackoverflow.com/questions/23206953/split-string-by-white-space

-1 means there are no limits to how many words it can split
PREG_SPLIT_NO_EMPTY in case there is white space at the end. It will not be stored.
*/
function ft_split($str)
{
    $str_array = preg_split('/\s+/', $str, -1, PREG_SPLIT_NO_EMPTY);
    sort($str_array);
    return($str_array);
}
?>
