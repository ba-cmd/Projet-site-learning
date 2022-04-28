<?php
class Forum {
    // nom des champs dans la bd
    private $_idForum;
    private $_Titre;

    public function __construct(array $data) {
        $this->hydrate($data);
    }

    // renvoi au différent setter 
    public function hydrate (array $data){
        foreach($data as $key => $value){
            $method = 'set'.ucfirst($key);
            if(method_exists($this, $method)){
                $this->$method($value);
            }
        }
    }

    //setters
    public function setIdForum($id){
        $id = (int) $id;
        if($id > 0)
            $this->_idForum= $id;
    }

    public function setTitre($nom){
        if(is_string($nom))
            $this->_Titre = $nom;
    }

    //Getters
    public function id(){
        return $this->_idForum;
    }
    public function titres (){
        return $this->_Titre;
    }

    
}
