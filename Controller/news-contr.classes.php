<?php
include "../Classes/news.classes.php";
class newContr extends news{
    private $idnews;
        public function __construct($idnews)
        {
            $this->idnews=$idnews;
        }
        public function newsfills(){
            $this -> newsfill($this->idnews);
        }
       
    }
    ?>