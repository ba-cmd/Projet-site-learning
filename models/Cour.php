<?php
class Cour {
    // nom des champs dans la bd
    private $_idCours;
    public $_nom;

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

    public function setnom($noms){
        if(is_string($noms))
            $this->_nom = $noms;
    }

    //Getters
    public function id(){
        return $this->_idCours;
    }
    public function nom(){
        return $this->_nom;
    }

    
}
