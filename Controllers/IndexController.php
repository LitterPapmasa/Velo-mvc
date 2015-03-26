<?php

class IndexController extends Controller {

    function __construct(){
        parent::__construct();

    }

    function indexAction(){
        $this->view->render("index","index");
    }
    
    function testAction(){
        $this->view->data(array("mes"=>"Hello"));
        $this->view->render("index","test");
    }
    
    function helloAction(){
        echo "<h3>work</h3>";
    }
    
    function errorAction(){
        $error = new Error();
    }
}