<?php
class Cours extends Model{

    public function getCours(){
        $this->getBdd();
        return $this->getAll('cours', 'Cour');
    }
}