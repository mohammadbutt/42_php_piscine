<?php

class NightsWatch implements IFighter
{
    public $warrior_army = array();

    public function recruit($warrior)
    {
        $this->warrior_army[] = $warrior;
    }

    public function fight()
    {
        $i = 0;
        $count = count($this->warrior_army);
        while($i < $count)
        {
            $current_warrior = $this->warrior_army[$i];
            if(method_exists($current_warrior, 'fight'))
                $current_warrior->fight();
            $i++;
        }
    }
}

?>
