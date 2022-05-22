<?php
include "../Classes/AprovedNews.classes.php";

class AprovednewsContr extends Aprovednews{
    private $idhiddenid ;
    private $idhiddentitle;
    private $idhiddendesc ;
    private $commentarioAdmin;

    public function __construct($idhiddenid,$idhiddendesc,$idhiddentitle,$commentarioAdmin)
    {
        $this->idhiddenid = $idhiddenid;
        $this->idhiddentitle = $idhiddentitle;
        $this->idhiddendesc = $idhiddendesc;
        $this->commentarioAdmin = $commentarioAdmin;
    }

    public function aproved(){
        if($this->empyInputs() == false){
            header("location: ../Views/AproveNews.php?error=emptyInput");
            exit();
        }else{
            $this -> aprove($this->idhiddenid,$this->idhiddentitle,$this->idhiddendesc,$this->commentarioAdmin);    
        }

    }

    public function denied(){
        if($this->empyInputs() == false){
            header("location: ../Views/AproveNews.php?error=emptyInput");
            exit();
        }else{
             $this -> denie($this->idhiddenid,$this->idhiddentitle,$this->idhiddendesc,$this->commentarioAdmin);
        }
      
    }
    public function modified(){
        if($this->empyInputs() == false){
            header("location: ../Views/AproveNews.php?error=emptyInput");
            exit();
        }else{
             $this -> modifie($this->idhiddenid,$this->idhiddentitle,$this->idhiddendesc,$this->commentarioAdmin);
        }
      
    }
    public function deleted(){
        if($this->empyInputs() == false){
            header("location: ../Views/AproveNews.php?error=emptyInput");
            exit();
        }else{
             $this -> delete($this->idhiddenid,$this->idhiddentitle,$this->idhiddendesc,$this->commentarioAdmin);
        }
      
    }
    private function empyInputs(){
        $result;
        if(empty($this->idhiddenid)||empty($this->idhiddentitle)||empty($this->idhiddendesc)||empty($this->commentarioAdmin)){
            $result = false;
        }else{
            $result=true;
        }
        return $result;
    }
    
}
?>