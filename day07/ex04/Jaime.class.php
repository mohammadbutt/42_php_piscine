<?php
/*
    References:
    https://stackoverflow.com/questions/15103810/how-do-i-get-class-name-in-php
*/
Class Jaime extends Lannister
{
    public function sleepWith($class_name)
    {
        $partner = get_class($class_name);
        if(strcmp($partner, "Tyrion") == 0)
            echo("Not even if I'm drunk !\n");
        else if(strcmp($partner, "Sansa") == 0)
            echo("Let's do this.\n");
        else if(strcmp($partner, "Cersei") == 0)
            echo("With pleasure, but only in a tower in Winterfell, then.\n");
    }
}

?>