<?php

class View
{

    public function render($controller,$action){        
        require "/Views/".$controller."/".$action.".php";
    }
    
}