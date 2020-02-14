#!/usr/bin/php
<?php
/*
reference:
https://stackoverflow.com/questions/23622141/how-to-read-console-user-input-in-php
https://stackoverflow.com/questions/15322371/php-wait-for-input-from-command-line
*/

while(true)
{
	echo "Enter a number: ";
	$user_string = trim(fgets(STDIN));
	if(is_numeric($user_string) == true)
	{
		if(($user_string % 2) == 0)
			echo "The number ".$user_string." is even"."\n";
		else
			echo "The number ".$user_string." is odd"."\n";
	}
	else
		echo "'".$user_string."' is not a number"."\n";
}
?>
