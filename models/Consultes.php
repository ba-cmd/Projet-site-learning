<?php
class Consultes extends Model{

    public function getCoursConsulte(){
        $this->getBdd();
        return $this->getRC(1);
    }

}