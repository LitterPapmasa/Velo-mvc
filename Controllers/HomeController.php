<?php

class HomeController extends Controller{

    function __construct(){
        echo "<br>We are on Home controller";
    }

    public function helloAction(){
        echo "<br>We are on hello action";
    }
    
    public function indexAction(){
        echo "<br>We are in index action!";
    }
    
    public function errorAction(){
        echo "<h1> Error 404, page not found :(";
    }
}