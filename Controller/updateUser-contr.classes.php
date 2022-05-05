<?php
include "../Classes/updateUser.classes.php";
class UpdateContr extends Update{
        private $user;
        private $completeName;
        private $email;
        private $password ;
        private $telephone;
        // private $userPhoto;
        private $userID;

        public function __construct($user,$completeName,$email,$password,$telephone,$userID)
        {
            $this->user=$user;
            $this->completeName=$completeName;
            $this->email=$email;
            $this->password=$password;
            $this->telephone=$telephone;
            // $this->userPhoto=$userPhoto;
            $this->userID=$userID;
        }

        public function updateUser(){
            if($this->empyInputs()== false){
                header("location: ../Views/Profile.php?error=emptyInput");
                exit();
            }
                /*if($this->chkpswrd($this->password)==false){
                header("location: ../Views/Profile.php?error=invalidPwd");
                exit();
            } */
            // if($this->checkUser($this->email,$this->user)==false){
            //     header("location: ../Views/Profile.php?error=userCheck");
            //     exit();
            // } 
            
            $this->update($this->completeName,$this->email,$this->password,$this->user,$this->telephone,$this->userID);
        }


        private function empyInputs(){
            $result;
            if(empty($this->user)||empty($this->completeName)||empty($this->email)||empty($this->password)||
            empty($this->telephone||empty($this->userID))){
                $result = false;
            }else{
                $result=true;
            }
            return $result;
        }


    }  
?>