<?php
include "../Controller/register.classes.php";
class RegisterContr extends Register{
        private $user;
        private $completeName;
        private $email;
        private $password ;
        private $confirmPassword;
        private $telephone;
        private $birthdayDate;

        public function __construct($user,$completeName,$email,$password,$confirmPassword,$telephone)
        {
            $this->user=$user;
            $this->completeName=$completeName;
            $this->email=$email;
            $this->password=$password;
            $this->confirmPassword=$confirmPassword;
            $this->telephone=$telephone;
        }

        public function registerUser(){
            if($this->empyInputs()== false){
                header("location: ../Views/Register.phperror=emptyInput");
                exit();
            }
            if($this->matchPwd()==false){
                header("location: ../Views/Register.phperror=matchPwd");
                exit();
            }
            if($this->checkUser($this->email,$this->user)==false){
                header("location: ../Views/Register.phperror=userCheck");
                exit();
            }
            $this->register($this->completeName,$this->email,$this->password,$this->user,$this->telephone);
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
            empty($this->telephone)||empty($this->birthdayDate)){
                $result = false;
            }else{
                $result=true;
            }
            return $result;
        }
    }  
?>