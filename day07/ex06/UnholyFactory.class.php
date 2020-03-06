<?php
/*
    Create the follogin methods for class unholyFactory:
    1. absorb
    2. fabricate
*/

Class UnholyFactory
{
    private $warrior_army = array();
    public function absorb($warrior)
    {
        if(strcmp(get_parent_class($warrior), "Fighter") == 0)
        {
            if(isset($this->warrior_army[$warrior->getName()]) == false)
            {
                echo("(Factory absorbed a fighter of type ".$warrior->getName()." )\n");
                $this->warrior_army[$warrior->getName()] = $warrior;
            }
            else
                echo("(Factory already absorbed a fighter of type ".$warrior->getName()." )\n");
        }
        else
            echo("(Factory can't absorb this, it's not a fighter)\n");
    }
    public function fabricate($warrior)
    {
        if(array_key_exists($warrior, $this->warrior_army) == true)
        {
            echo("(Factory fabricates a fighter of type ".$warrior." )\n");
            return($this->warrior_army[$warrior]);
        }
        else
        {
            echo("(Factory hasn't absorbed any fighter of type ".$warrior." )\n");
            return(null);
        }
    }
}
?>