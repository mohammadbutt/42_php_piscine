<?php

Class House
{
    public function introduce()
    {
        $sentence1 = "House ".$this->getHouseName()." of ".$this->getHouseSeat();
        $sentence2 = " : ".'"'.$this->getHouseMotto().'"'."\n";
        echo($sentence1.$sentence2);
    }
}

/*
    Alternatively we can also use an abstract class.
    Abstract class can be thought of as a blue print.
    Idea of an abstract class is that the child class fills information for the parent
    class.

    Following are placed inside the abstract class to ensure that the abstract class
    gets all these functions from the child class. More information is fine, but
    all child classes must at least provide/ return the information for the following:
        abstract function getHouseName();
        abstract function getHouseMotto();
        abstract function getHouseSeat();

    If we declare abstract class functions as above, but dont have them in any of the
    child classes, then the program will crash.

    But if we dont declare abstract functions like above and if we have a specific
    function in one class, but not other, then there will be no errors.
    Suppose we have an abstract class called House with child classes called room1 and
    room2. If class room1 has a method called getPlateCount(), but class room2 does not
    have a method called getPlateCount(), then 
*/


abstract class House2
{
    abstract function getHouseName();
    abstract function getHouseMotto();
    abstract function getHouseSeat();

    public function introduce()
    {
        $sentence1 = "House ".$this->getHouseName()." of ".$this->getHouseSeat();
        $sentence2 = " : ".'"'.$this->getHouseMotto().'"'."\n";
        echo($sentence1.$sentence2);
    }
}

?>