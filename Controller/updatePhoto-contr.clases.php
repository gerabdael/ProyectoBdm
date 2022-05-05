<?php
include "../Classes/updatePhoto.classes.php";
class UpdatePhotoContr extends UpdatePhoto{
        private $userPhoto;
        private $userID;

        public function __construct($userPhoto,$userID)
        {
            $this->userPhoto=$userPhoto;
            $this->userID=$userID;
        }

        public function updateUserPhoto(){
            if($this->empyInputs()== false){
                header("location: ../Views/Profile.php?error=emptyInput");
                exit();
            }
            $this->updatePhoto($this->userPhoto,$this->userID);
        }


        private function empyInputs(){
            $result;
            if(empty($this->userPhoto||empty($this->userID))){
                $result = false;
            }else{
                $result=true;
            }
            return $result;
        }


    }  
?>