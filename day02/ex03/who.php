#!/usr/bin/php
<?php
/*
    References:
    https://en.wikipedia.org/wiki/Who_(Unix)
    https://en.wikipedia.org/wiki/W_(Unix)
    
*/
system("who >> data.txt");
system("cat data.txt");
//rm("data.txt");
?>