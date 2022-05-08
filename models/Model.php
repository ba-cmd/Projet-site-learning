<?php

abstract class Model {
	private static $_bdd;

    // instancie la conn à la bdd
    private static function setBdd(){
        self::$_bdd = new PDO('mysql:host=localhost;dbname=BaseDonnee;charset=utf8', 'root', '');
        self::$_bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
    }
    // recup la conn à la bdd
	protected function getBdd(){
        if(self::$_bdd == null)
            self::setBdd();
        return self::$_bdd;
	}

	protected function getAll($table, $obj){
        $var = [];
		$req = $this->getBdd()->prepare('SELECT * FROM ' .$table);
		$req->execute();
        while($data = $req->fetch(PDO::FETCH_ASSOC)){
            $var[] = new $obj($data);
        }
		return $var;
        $req->closeCursor();

	}
    public function forumNotCours($table, $obj){
        $var = [];
        $req = $this->getBdd()->prepare('SELECT * FROM ' .$table. ' WHERE Forum.idCours IS NULL Order By Forum.DateCreationForum DESC');
        $req->execute(); 
        while($data = $req->fetch(PDO::FETCH_ASSOC)){
            $var[] = new $obj($data);
        }
        return $var;
        $req->closeCursor();
    }

    protected function getRC($idU){
        $req = $this->getBdd()->prepare('SELECT * FROM coursconsulte,cours where coursconsulte.idCours=cours.idCours AND numUtil=:iu Order By coursconsulte.DateConsultation DESC limit 3');
        $req->execute([
            'iu'=>$idU
        ]); 
        $valRe=$req->fetchAll();    
        return $valRe;

    }

}





?>