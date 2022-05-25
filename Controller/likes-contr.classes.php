<?php
include "../Classes/likes.classes.php";
class likeContr extends like{
    private $idnews;
        public function __construct($idnews)
        {
            $this->idnews=$idnews;
        }
        public function likesfills(){
            $this -> like($this->idnews);
        }
        public function dislikesfills(){
            $this -> dislike($this->idnews);
        }
       
    }
?>