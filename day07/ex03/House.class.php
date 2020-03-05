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

?>