<?php

class Router
{

    // Functuion return controller from url
    private function getController($urlController){
        if (!empty($urlController)) {
            $urlController = ucfirst($urlController);

            if (is_readable('Controllers/'.$urlController.'Controller.php')){
                include_once 'Controllers/'.$urlController.'Controller.php';            
                return $urlController;
            }else{                        
                return "Error";            
            }
        }else{
            include_once 'Controllers/indexController.php';
            return "Index";
        }
    }

    // Function return action if exist in controller
    private function getAction($urlAction,$urlController){
        if (empty($urlAction)){              
            return "index";
        }else{   
            if (!method_exists($urlController,  $urlAction."Action" )){    
                if (method_exists($urlController,  "errorAction" )){                    
                    return "error";                 
                }else{ 
                    return "index"; 
                }

            }else{            
                return $urlAction;
            }
        }
    }

    function __construct(){
        //*** EXECUTION ***

        // Get our short url
        $url = explode("/", $_GET['url']);
         
        $urlController = $this->getController($url[0])."Controller";
        
        if ($urlController == "ErrorController") $urlController ="Error";
        $urlAction = $this->getAction($url[1], $urlController)."Action";

        // load controller with action (load page)
        $controller = new $urlController;
        $controller->{$urlAction}();
    }

}