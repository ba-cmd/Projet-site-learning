<?php
class Cour {
    // nom des champs dans la bd
    private $_idCours;
    private $_NomCours;

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
    public function setIdcours($id){
        $id = (int) $id;
        if($id > 0)
            $this->_idCours = $id;
    }

    public function setNomcours($nom){
        if(is_string($nom))
            $this->_NomCours = $nom;
    }

    //Getters
    public function id(){
        return $this->_idCours;
    }
    public function NomCours(){
        return $this->_NomCours;
    }

    
}
