<?php 
require_once('views/View.php');
class ControllerAccueil {
    private $_cours;
    private $_view;
    public $_forums;
    public $_consultes;

    public function __construct($url){
        if(isset($url) && count([$url]) > 5 )
            throw new Exception('Page introuvable');
        else {
            $this->funcPriverCours();
            //$this->funcPriverForums();
        }
    }
    private function funcPriverCours(){
        $this->_cours = new Cours;
        $cours = $this->_cours->getCours();
        // var_dump($cours);
        $this->_forums = new Forums;
        $this->_consultes = new Consultes;
        $consultes=$this->_consultes->getCoursConsulte(1);
        $forums = $this->_forums->getForum();
        $forumsNotCours = $this->_forums->getF();
    
        


        // var_dump($forumsNotCours);

        require_once('views/viewAccueil.php');
        // Pour appeler la vue de manière sécurisé
        // $this->_view = new View('Accueil');
        // $this->_view->generate(array('cours' => $cours));
        // $this->_view->generate(array('forums' => $forums));
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