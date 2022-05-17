<?php
include "../Classes/AprovedNews.classes.php";

class AprovednewsContr extends Aprovednews{
    private $idhiddenid ;
    private $idhiddentitle;
    private $idhiddendesc ;
    private $commentarioAdmin;

    public function __construct($idhiddendesc,$idhiddentitle,$idhiddenid,$commentarioAdmin)
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
        }
        $this -> sign_in($this->idhiddenid,$this->idhiddentitle,$this->idhiddendesc,$this->commentarioAdmin);
    }

    public function denied(){
        if($this->empyInputs() == false){
            header("location: ../Views/AproveNews.php?error=emptyInput");
            exit();
        }
       $this -> sign_in($this->idhiddenid,$this->idhiddentitle,$this->idhiddendesc,$this->commentarioAdmin);
    }

    
    private function empyInputs(){
        $result;
        if(empty($this->email)||empty($this->pwd)){
            $result = false;
        }else{
            $result=true;
        }
        return $result;
    }
}
?>