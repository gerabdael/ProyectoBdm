<?php
include "../Classes/commentchild.classes.php";
class commentChildContr extends commentChild{ 
        public function __construct($idComment,$comment,$idUser)
        { 
            $this->idComment = $idComment;
            $this->comment = $comment;
            $this->idUser=$idUser;
        }
        public function insertcommchild(){
            $this -> inscommentchild($this->idComment,$this->comment,$this->idUser);
        }
        public function insertcomm(){
            $this -> inscomment($this->comment,$this->idUser);
        }

}