<?php
/*
    Reference:
    https://www.quora.com/What-is-the-use-of-header-function-in-PHP-1
    https://www.geeksforgeeks.org/php-header-function/
    https://www.php.net/manual/en/function.header.php
    Uses:
    1. Change page location/redirect to a different website
    2. set timezone
    3. send http status
    4. Limit or disable cache(data is stored, so information can be served faster)
*/
//Set a past date
header("Expires: Thur, 20 Feb 2020 03:27:00 GMT");
header("Content-Type: text/html");

// header("Location: https://apple.com"); //
// print_r(headers_list()); // will show an array of what is stored inside header().
?>
<html><body>Hello</body></html>