#!/usr/bin/php
<?php
/*
    References: https://regexr.com/
*/
/*
<html><head><title>Nice page</title></head>
<body>Hello World <a href=http://cyan.com title="a link">This is a link</a>
<br /><a     href=https://www.riven.com> And this too <img src=wrong.image title="And also this"></a>
</body></html>
*/

/*
<a(\s+)(href=http)s?://(www)?\.?[a-zA-z0-9]+\.[a-z]+
(<a)(.*?)(>)[a-zA-Z\s+]*(</a>)
*/
echo("This is a test\n");
?>