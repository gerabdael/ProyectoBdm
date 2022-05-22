<?php
include "../Classes/category.classes.php";
class catContr extends cat{ 
            private $NombreCat;
            private $user;
            private $descripcion ;
            private $color;
            private $idhiddenid;
        public function __construct($NombreCat,$user,$descripcion,$color)
        {
                
            $this->NombreCat = $NombreCat;
            $this->user = $user;
            $this->descripcion = $descripcion;
            $this->color = $color;
        }
        public function insertCategory(){
            $this -> insCat($this->NombreCat,$this->user,$this->descripcion,$this->color);
        }
        public function modCategory($idhiddenid){
            $this->idhiddenid=$idhiddenid;
            $this -> modCat($this->idhiddenid,$this->NombreCat,$this->user,$this->descripcion,$this->color);
        }
        public function delCategory($idhiddenid){
            $this->idhiddenid=$idhiddenid;
            $this -> delCat($this->idhiddenid);
        }


       
    }        
?>