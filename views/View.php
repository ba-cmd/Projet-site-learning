


<?php
class View {
    private $_file;
    private $_t;

    public function __construct($action){
        $this->_file = 'views/view'.$action.'.php';

    }
    // func qui génère et affiche la vue
    public function generate($data){
        //la partie spécifique de la vue (le contenu de la vue sans l'entete et le pied de page)
        $content = $this->generateFile($this->_file, $data);
        //Template contient l'entete et le pied de page sans la partie spécifique
        $view = $this->generateFile('views/template.php', array('t' => $this->_t, 'content' => $content));
        echo $view;
    }
    // func qui génère un fichier vue et renvoie le resultat produit
    public function generateFile($file, $data){
        if(file_exists($file)){
            extract($data);
            //temporisation (mise en tampo)
            ob_start();
            // on inclut le fichier vue
           require_once $file;
            return ob_get_clean();
        }else{
            throw new Exception('Fichier '.$file.' introuvable');
        }
    }





}