<?php

abstract class Model {
    // private $host = 'localhost';
	// private $nom_bd = 'Forum';
	// private $nom_utilisateur = 'root';
	// private $motdepasse = '';
	
	// protected $table ;
	// protected $id;

	private static $_bdd;

    // instancie la conn à la bdd
    private static function setBdd(){
        self::$_bdd = new PDO('mysql:host=localhost;dbname=Forum;charset=utf8', 'root', '');
        self::$_bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
    }
    // recup la conn à la bdd
	protected function getBdd(){
        if(self::$_bdd == null)
            self::setBdd();
        return self::$_bdd;
	}

	protected function getAll($table, $obj){
        // $table = 'cours';
        $var = [];
		$req = $this->getBdd()->prepare('SELECT * FROM ' .$table. ' ORDER BY idCours desc');
		$req->execute();
        while($data = $req->fetch(PDO::FETCH_ASSOC)){
            $var[] = new $obj($data);
        }
        // var_dump($var);
		return $var;
        $req->closeCursor();

        // $sql = "SELECT * FROM " .$table;
        // $req = $this->getBdd()->prepare($sql);
        // $req->execute();
        // var_dump($req->fetchAll());

	}

        protected function getAl($table, $obj){
        // $table = 'cours';
        $var = [];
        $req = $this->getBdd()->prepare('SELECT * FROM ' .$table. ' ORDER BY idForum desc');
        $req->execute();
        while($data = $req->fetch(PDO::FETCH_ASSOC)){
            $var[] = new $obj($data);
        }
        // var_dump($var);
        return $var;
        $req->closeCursor();

        // $sql = "SELECT * FROM " .$table;
        // $req = $this->getBdd()->prepare($sql);
        // $req->execute();
        // var_dump($req->fetchAll());

    }

    }





?>