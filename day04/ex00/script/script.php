#!/usr/bin/php
<?php
	if(strcmp($argv[1], "1") == 0)
	{
		system("curl -v -c cook.txt 'http://e1z2r2p5.42.fr:8080/42_php_piscine/day04/ex00/index.php'");
		echo("\ncurl -v -c cook.txt 'http://e1z2r2p5.42.fr:8080/42_php_piscine/day04/ex00/index.php'\n");
		echo("name='login' value=''\n");
		echo("name='passwd' value=''\n");
	}
	else if(strcmp($argv[1], "2") == 0)
	{
		system("curl -v -b cook.txt 'http://e1z2r2p5.42.fr:8080/42_php_piscine/day04/ex00/index.php?login=sb&passwd=beeone&submit=OK'");	
		echo("\ncurl -v -b cook.txt 'http://e1z2r2p5.42.fr:8080/42_php_piscine/day04/ex00/index.php?login=sb&passwd=beeone&submit=OK'\n");
		echo("name='login' value='sb'\n");
		echo("name='passwd' value='beeone'\n");
	}
	else if(strcmp($argv[1], "3") == 0)
	{
		system("curl -v -b cook.txt 'http://e1z2r2p5.42.fr:8080/42_php_piscine/day04/ex00/index.php'");	
		echo("\ncurl -v -b cook.txt 'http://e1z2r2p5.42.fr:8080/42_php_piscine/day04/ex00/index.php'\n");
		echo("name='login' value='sb'\n");
		echo("name='passwd' value='beeone'\n");
	}
	else if(strcmp($argv[1], "4") == 0)
	{
		system("curl -v 'http://e1z2r2p5.42.fr:8080/42_php_piscine/day04/ex00/index.php'");
		echo("\ncurl -v 'http://e1z2r2p5.42.fr:8080/42_php_piscine/day04/ex00/index.php'\n");
		echo("name='login' value=''\n");
		echo("name='passwd' value=''\n");
	}
?>
