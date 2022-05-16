<?php
include "../Classes/register.classes.php";
class RegisterContr extends Register{
        private $user;
        private $completeName;
        private $email;
        private $password ;
        private $confirmPassword;
        private $telephone;
        private $userPhoto;

        public function __construct($user,$completeName,$email,$password,$userPhoto,$confirmPassword,$telephone)
        {
            $this->user=$user;
            $this->completeName=$completeName;
            $this->email=$email;
            $this->password=$password;
            $this->confirmPassword=$confirmPassword;
            $this->telephone=$telephone;
            $this->userPhoto=$userPhoto;
        }

        public function registerUser(){
            if($this->empyInputs()== false){
                header("location: ../Views/Register.php?error=emptyInput");
                exit();
            }
/*             if($this->chkpswrd($this->password)==false){
                header("location: ../Views/Register.php?error=invalidPwd");
                exit();
            } */
            if($this->matchPwd()==false){
                header("location: ../Views/Register.php?error=matchPwd");
                exit();
            }
            if($this->checkUser($this->email,$this->user)==false){
                header("location: ../Views/Register.php?error=userCheck");
                exit();
            } 
            
            $this->register($this->completeName,$this->email,$this->password,$this->userPhoto,$this->user,$this->telephone);
        }
        private function matchPwd(){
            $result;
            if($this ->password !== $this-> confirmPassword){
                $result = false;
            }else{
                $result= true;
            }
            return $result;
        }


        private function empyInputs(){
            $result;
            if(empty($this->user)||empty($this->completeName)||empty($this->email)||empty($this->password)||empty($this->confirmPassword)||
            empty($this->telephone)){
                $result = false;
            }else{
                $result=true;
            }
            return $result;
        }
    }  
?>