<?php
/*
function ft_is_sort($tab)
{
    $copy_array = $tab;
    sort($copy_array);
    if($copy_array === $tab)
        return(true);
    else
        return(false);
}
*/
function ft_is_sort($tab)
{
    $i = 0;
    $word_count = count($tab) - 1;
    while($i < $word_count)
    {
        if(strcmp($tab[$i], $tab[$i + 1]) > 0)
            return(false);
        $i++;
    }
    return(true);
}
?>