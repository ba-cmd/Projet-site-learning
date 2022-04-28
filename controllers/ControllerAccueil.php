<?php 
require_once('views/View.php');
class ControllerAccueil {
    private $_cours;
    private $_view;
    public $_forums;

    public function __construct($url){
        if(isset($url) && count([$url]) > 1 )
            throw new Exception('Page introuvable');
        else
             $this->funcPriverCours();
              //$this->funcPriverForums();
    }
    private function funcPriverCours(){
        $this->_cours = new Cours;
        $cours = $this->_cours->getCours();
        
        // Pour appeler la vue de manière sécurisé
        //require_once('views/viewAccueil.php');
        $this->_view = new View('Accueil');
        $this->_view->generate(array('cours' => $cours));
    }

     private function funcPriverForums(){
        $this->_forums = new Forums;
        $forums = $this->_forums->getForum();
        
        // Pour appeler la vue de manière sécurisé
        require_once('views/viewAccueil.php');
        $this->_view = new View('Accueil');
        $this->_view->generate(array('forums' => $forums));
    }
   
}