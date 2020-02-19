#!/usr/bin/php
<?php
/*
    References:
    https://regexr.com/
    http://leaverou.github.io/regexplained/
    https://regexone.com/ - To practice regex
    https://stackoverflow.com/questions/22040272/using-php-replace-regex-with-regex
    https://stackoverflow.com/questions/2529549/regex-uppercase-to-lowercase
    https://stackoverflow.com/questions/9939066/how-to-transform-a-string-to-lowercase-with-preg-replace
    https://stackoverflow.com/questions/34420366/replace-an-upper-case-string-with-lower-case-using-preg-replace-and-regex
    https://www.youtube.com/watch?v=In5NBIRfMrQ
    https://www.youtube.com/watch?v=DTQDMKx4Rks&t=55s
*/
    if($argc != 2)
    {
        echo("usage./magnifying_glass.php [file_name]\n");
        return(0);
    }
    if(file_exists($argv[1]) == false)
    {
        echo("File does not exist\n");
        return(0);
    }
    $file_array = file($argv[1]);
    $count = count($file_array);
    $i = 0;
    while($i < $count)
    {
        $pattern1 = '/<a.*title="(.*)">/';
        $pattern2 = '/<a.*?>(.*?)</';
        if(preg_match($pattern1, $file_array[$i]) == true)
        {
            preg_match_all($pattern1, $file_array[$i], $array_of_groups);
            $file_array[$i] = str_replace($array_of_groups[1][0], strtoupper($array_of_groups[1][0]), $file_array[$i]);
        }
        if(preg_match($pattern2, $file_array[$i]) == true)
        {
            preg_match_all($pattern2, $file_array[$i], $array_of_groups);
            $file_array[$i] = str_replace($array_of_groups[1][0], strtoupper($array_of_groups[1][0]), $file_array[$i]);
        }
        echo($file_array[$i++]);
    }
?>