<?php
require_once('views/view.php');
class Router {
    private $_ctrl;
    private $_view;
    //Permet de recupérer url de l'utilisateur
    public function getRouteRequete() {
        try {
            // chargemment auto des classes
            spl_autoload_register(function($class){
                require_once('models/'.$class.'.php');
            });
            $url = '';
            // le controller est inclus selon l'action du user
            if(isset($_GET['url'])){
                $url = explode('/', filter_var($_GET['url'], FILTER_SANITIZE_URL));
                // var_dump($url);
                $controller = ucfirst(strtolower($url[0]));
               // var_dump($controller);
                
                $controllerClass = "Controller".$controller;
                $controllerFile = "controllers/".$controllerClass.".php";

                if(file_exists($controllerFile)){
                    require_once($controllerFile);
                    $this->_ctrl = new $controllerClass($url);
                }else {
                    throw new Exception('Page introuvable');
                }
            }
            else {
                require_once('controllers/ControllerAccueil.php');
                $this->_ctrl = new ControllerAccueil($url);
            }
          } 
        catch (Exception $e) {
            $errorMsg = $e->getMessage();
            //require_once('views/viewError.php');
            $this->_view = new View('Error');
            $this->_view->generate(array('errorMsg' => $errorMsg));
        }
    }
}
?>