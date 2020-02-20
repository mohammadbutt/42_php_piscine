<?php
/*
    References:https:
    stackoverflow.com/questions/2160382/how-do-i-grab-all-parameters-from-a-url-and-print-it-out-in-php

*/
    
    foreach($_GET as $key => $value)
		echo($key).": ".$value."\n";
?>
