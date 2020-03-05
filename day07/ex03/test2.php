<?php

/*
	test2 will cause error because House class does not have a method called
	diagnose();
*/

include('House.class.php');

class DrHouse extends House
{
	public function diagnose()
	{
		print("It's not lupus !" . PHP_EOL);
	}
}

$house = new DrHouse();
$house->introduce();

?>

