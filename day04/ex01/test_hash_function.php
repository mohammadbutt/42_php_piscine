#!/usr/bin/php
<?php
echo("Running hashing function\n");
$string_to_hash = "titi1";
$hash_string = hash("whirlpool",$string_to_hash);
echo($hash_string)."\n";
//print_r(hash_algos());
mkdir("new_dir");
?>