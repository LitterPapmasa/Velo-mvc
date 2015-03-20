<?php
class Controller
{
    public $view;
    
    function __construct(){
        $this->view = new View();
    }
    
    function indexAction(){        
        $this->view->render("index");
    }
}