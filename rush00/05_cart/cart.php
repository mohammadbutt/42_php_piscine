<?php
/*
    References:
    https://stackoverflow.com/questions/722379/can-html-be-embedded-inside-php-if-statement/38391978#38391978
    https://stackoverflow.com/questions/5673269/what-is-the-advantage-of-using-heredoc-in-php/5673478#5673478
    https://andy-carter.com/blog/what-are-php-heredoc-nowdoc

    Notes:  1. Use heredoc syntax to embed html code inside php.
            2. seperate html file is created just for layout.
            3. header will be removed.

*/
    header("Location: cart.html");
?>