#!/usr/bin/php
<?php
/*
    Reference:
    https://www.youtube.com/watch?v=8-r7zNZ8kng

*/
/*
function create_directories()
{
    $htdocs_path = "../htdocs";
    $private_path = "/private";
    $full_path = $htdocs_path.$private_path;
    if(file_exists($htdocs_path) == false && file_exists($full_path) == false)
    {
        mkdir($htdocs_path);
        mkdir($full_path);
    }
}
    $str = "ok";
    if($str !== NULL)
        echo("ok\n");
//    mkdir("new_folder");
//    rm_rf(new_folder);
*/

function is_space($c)
{
    if($c == PHP_EOL)
        return(true);
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



    $i = 0;
    $str = file_get_contents("../htdocs/private/passwd");
    $str_array = (ft_split($str));
    $word_count = count($str_array);

    echo($word_count)."\n";
    while($i < $word_count)
    {

        $str2 = unserialize($str_array[$i++]);
        echo($str2["login"])."\n";
    }

/*
    if($argc < 2)
        return(0);
    $str_array = ft_split($argv[1]);
    $i = 0;
    $word_count = count($str_array);
    while($i < $word_count - 1)
        echo($str_array[$i++])." ";
    if($word_count > 0)
        echo($str_array[$i])."\n";
*/
//    $str = "ThisisLine1\nThisisLine2\nThisisLine3\nThisisLine4\n";
/*
    $str = file_get_contents("../htdocs/private/passwd");
    $str_array = ft_split($str);
    $i = 0;
    $word_count = count($str_array);
    echo($word_count)."\n";
    while($i < $word_count -1)
        echo($str_array[$i++]);
*/
/*
    $str = unserialize(file_get_contents("../htdocs/private/passwd"));
    print_r($str["login"])."\n";
*/


//    print_r(unserialize($str)); works
//    print_r(unserialize($str)["login"]); works
//    echo("\n\n");
//    print_r($str_array);
/*
    while($i < $word_count)
    {
//        $str2 = (unserialize($str_array[$i++]))["login"]; // works
//        echo($str2)."\n";
        $str2 = unserialize($str_array[$i++]);
        echo($str2["login"])."\n";
//        echo($str["login"])."\n";
//        $str_unserialized = unserialize($str);
//        print_r(unserialize($str)["login"]);
//        echo("\n");
//        echo("str_unserialized: ".$unserialized_str)."\n";
//        echo(($str_array[$i++]));
    }
*/
?>