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
*/
/*
<html><head><title>Nice page</title></head>
<body>Hello World <a href=http://cyan.com title="a link">This is a link</a>
<br /><a     href=https://www.riven.com>And this too <img src=wrong.image title="And also this"></a>
</body></html>
*/

/*
<a(\s+)(href=http)s?://(www)?\.?[a-zA-z0-9]+\.[a-z]+
<a.*?(</a>) - Selects all of the text from <a </a>
(<a.*)(</a>) - 1. Selects all of the text from <a </a> - This will turn everything to uppercase
(<A)(\s+)(.*.COM>?)(\s*)(TITLE)? - We will use this to turn the first half of the lines to lowercase back
<IMG.* = - We will use this to turn the second half of the lines to lowercase back
(<a)(.*?)(>)[a-zA-Z\s+]*(</a>)

// -- First line
(<a.*)(</a>) - 1. Converts the entire line in uppercase
(<a)(\s+)(.*)(.(com|io|net|edu))((>)?)((\s*)?)((title)?) - 2. Converts First half to lowercase for both lines
(<img)(.*)(title=) - 3. Converts img tag to lowercase
</a> - 4. Coverts last bit to lowercase

*/
//echo("This is a test\n");
    if($argc != 2)
    {
        return(0);
    }

    $file_array = file($argv[1]);
    $file_count = count($file_array);
    $i = 0;
    while($i < $file_count - 1)
    {
        $preg_match_return = preg_match("/(<a.*)(<\/a>)/", $file_array[$i]);
        if($preg_match_return == 1)
        {
            $file_array[$i] = preg_replace_callback("/(<a.*)(<\/a>)/", function($new_string)
            {
                return(strtolower($new_string));
            }, $file_array[$i]);
        }
        echo($file_array[$i++]);
    }

?>