<?php
class Forums extends Model{

    public function getForum(){
        $this->getBdd();
        return $this->getAll('Forum', 'Forum');
    }

    public function getF(){
        $this->getBdd();
        return $this->forumNotCours('Forum', 'Forum');
    }
}