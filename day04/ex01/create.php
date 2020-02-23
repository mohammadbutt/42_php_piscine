<?php
/*
    Reference:
    https://www.youtube.com/watch?v=8-r7zNZ8kng
    https://stackoverflow.com/questions/9671659/php-is-null-and-null/9671787#9671787
    Eli the Computer Guy - https://www.youtube.com/watch?v=QmBSijbgTwE
    https://stackoverflow.com/questions/8641889/how-to-use-php-serialize-and-unserialize

*/

/*
    ft_split starts below
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


/*
    ft_split ends above
*/

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

function is_login_valid()
{
    $file_path = "../htdocs/private/passwd";
    if(file_exists($file_path) == false)
        return(true);
    $i = 0;
    $file_array = unserialize(file_get_contents("../htdocs/private/passwd"));
    $user_count = count($file_array);
    while($i < $user_count)
    {
        if(strcmp($file_array[$i++]["login"], $_POST["login"]) == 0)
            return(false);   
//        echo($file_array[$i++]["login"]."\n");
//        if($file_array[$i]["login"])
    }
//    $str_unserialize = unserialize($str);
//    $str_array = explode(";}", str);
//    $str_array = (ft_split($str));
//    $word_count = count($str_array);

//    echo($word_count)."\n";
//    echo("str_array\n");
//    print_r($str_array);

//    echo("serialized\n");
//    print_r($str);

//    echo("unserialize\n");
//    print_r($str_unserialize);
//    print_r($str_array);
//    while($i < $word_count)
//    {
//        $str2 = unserialize($str_array[$i++]);
//        echo($str2["login"])."\n";
//    }
    return(true);
/*
    $i = 0;
    $str = unserialize(file_get_contents("../htdocs/private/passwd"));
    $str_array = (ft_split($str));
    $word_count = count($str_array);
    echo($word_count)."\n";
    print_r($str_array);
    print_r($str);
    while($i < $word_count)
    {

        $str2 = unserialize($str_array[$i++]);
        echo($str2["login"])."\n";
    }
    return(true);
*/
/*
    $str = unserialize(file_get_contents($file_path));
    print_r($str);
    return(true);
*/
/*
    $i = 0;
    $str = file_get_contents($file_path);
    $str_array = (ft_split($str));
    $word_count = count($str_array);

    echo($word_count)."\n";
    while($i < $word_count)
    {

        $str2 = unserialize($str_array[$i++]);
        echo($str2["login"])."\n";
    }
    return(true);
*/
/*
    $i = 0;
    $str = unserialize(file_get_contents($file_path));
//    print_r($str);
//    return(true);
    print_r($str);
    $str_array = (ft_split($str));
    $word_count = count($str_array);

    echo($word_count)."\n";
    while($i < $word_count)
    {
        print_r($str_array[$i]);
        $str2 = unserialize($str_array[$i++]);
        echo($str2)."\n";
//        echo($str2["login"])."\n";
    }
    return(true);
*/

//    $str = unserialize(file_get_contents($file_path));
//    print_r($str);
//    return(true);
/*
    $i = 0;
    $str = file_get_contents("../htdocs/private/passwd");
    $str_array = (ft_split($str));
    $number_of_users = count($str_array);
    echo($str_array)."\n";
    while($i < $number_of_users)
    {
        $str2 = unserialize($str_array[$i++]);
        echo($str2["login"])."\n";
//        $database_user = unserialize($str_array[$i]);
//        echo($database_user["login"])."\n";
//        if(strcmp($new_login, $database_user["login"]) == 0)
//            return(false);
//        $i++;
    }
*/
/*
    $str = file_get_contents("../htdocs/private/passwd");
    $str_array = (ft_split($str));
    $i = 0;
    $word_count = count($str_array);

    echo($word_count)."\n";
    while($i < $word_count)
    {

        $str2 = unserialize($str_array[$i++]);
        echo($str2["login"])."\n";
    }
*/

/*
    $i = 0;
    $new_login = $_POST["login"];
    $file_content = file_get_contents("../htdocs/private/passwd");
    $file_content_array = ft_split($file_content);
    $number_of_users = count($file_content_array);
    echo($file_content)."\n";
    while($i < $number_of_users)
    {
        $database_user = unserialize($file_content_array[$i]);
        echo($database_user["login"])."\n";
        if(strcmp($new_login, $database_user["login"]) == 0)
            return(false);
        $i++;
    }
    return(true);
*/
}

    create_directories();
    $file_path = "../htdocs/private/passwd";
    $login = $_POST["login"];
    $password = $_POST["passwd"];
    $submit = $_POST["submit"];
    if($login !== NULL && $password !== NULL && strcmp($submit, "OK") == false && is_login_valid() == true)
    {
//        $new_user_credentials = serialize(array("login" => $login, "passwd" => hash("whirlpool", $password)));
//        $new_user_credentials = array("login" => $login, "passwd" => hash("whirlpool", $password));
/*
        $new_user_credentials[] = array("login" => $login, "passwd" => hash("whirlpool", $password));
        file_put_contents($file_path, serialize($new_user_credentials, FILE_APPEND));
*/ 
//        $new_user_credentials = [];
        if(file_exists($file_path) == true)
            $new_user_credentials = unserialize(file_get_contents($file_path));
        $new_user_credentials[] = array("login" => $login, "passwd" => hash("whirlpool", $password));
        file_put_contents($file_path, serialize($new_user_credentials));
//        $new_user_credentials = array("login" => $login, "passwd" => hash("whirlpool", $password));
//        file_put_contents($file_path, serialize($new_user_credentials).PHP_EOL , FILE_APPEND);
//        $new_user = array('login' => $_POST['login'], 'passwd' => hash('md5', $_POST['passwd']));
//        $contents = unserialize(file_get_contents("../htdocs/private/passwd"));
//        $contents[] = $new_user;
//        file_put_contents("../htdocs/private/passwd", serialize($contents));
//        $new_user_credentials[] = array("login" => $_POST["login"], "passwd" => hash("whirlpool", $_POST["passwd"]));
        echo("OK\n");
    }
   else
       echo("ERROR\n");
//    print_r($new_user_credentials);

//    $contents = unserialize(file_get_contents($file_path));
//    print_r($contents);
//    foreach($contents as $users)
//        echo($users["login"])."\n";
//    $unserialized_file = unserialize(file_get_contents($file_path));
//    $normal_file = file_get_contents($file_path);
//    foreach($unserialized_file as $user)
//        echo($user["login"]);
//    print_r($unserialized_file)."\n";
//    print_r($normal_file)."\n";
//    print_r($unserialized_file["login"]."\n");
//    print_r(unserialize($normal_file)["login"]);
//    foreach($unserialized_file as $user)
//        echo($user["login"])."\n";
//    $file_serialized = file_get_contents($file_path);
//    $i = 0;
//    while(feof(deserialize($file_serialized)))
//    {
//        print_r(deserialize($file_serialized));
//    }
//    $file_unserialized = unserialize($file_serialize);
//    echo(($file_serialized)."\n\n");
//    print_r(($file_serialized));
//    foreach(file_get_contents($file_path) as $value)
//        print_r($value["login"]);
// print_r(unserialize(file_get_contents($file_path)));
//file_put_contents($file_path, serialize("Add line 1")."\n", FILE_APPEND);
?>