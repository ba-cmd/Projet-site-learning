<?php
class Forums extends Model{

    public function getForum(){
        $this->getBdd();
        return $this->getAll('forum', 'Forum');
    }

    public function forumNotCours($table, $obj){
        $var = [];
        $req = $this->getBdd()->prepare('SELECT * FROM ' .$table. ' WHERE Forum.idCours IS NULL Order By Forum.DateCreationForum DESC');
        $req->execute(); 
        while($data = $req->fetch(PDO::FETCH_ASSOC)){
            $var[] = new $obj($data);
        }
        // var_dump($var);
        return $var;
        $req->closeCursor();
    }

    public function getF(){
        $this->getBdd();
        return $this->forumNotCours('forum', 'Forum');
    }
}