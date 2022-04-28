<?php
class Forums extends Model{

    public function getForum(){
        $this->getBdd();
        return $this->getAl('forum', 'Forum');
    }
}