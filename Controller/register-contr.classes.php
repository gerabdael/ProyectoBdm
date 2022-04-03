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
                header("location: ../Views/Register.php?error=emptyInput");
                exit();
            }
            if($this->chkpswrd()==false){
                header("location: ../Views/Register.php?error=invalidPwd");
                exit();
            }
            if($this->matchPwd()==false){
                header("location: ../Views/Register.php?error=matchPwd");
                exit();
            }
            if($this->checkUser($this->email,$this->user)==false){
                header("location: ../Views/Register.php?error=userCheck");
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

        private function chkpswrd(){
            $result;
            $regx="^\S*(?=.[a-z])(?=.[A-Z])(?=.[0-9])(?=.[@$!%?&#!_-])[a-zA-Z0-9@$!%?&#!_-]{8,}$/";
            $match = preg_match($regx,$this->password);
            if($match==0){
                $result=false;
            }else{
                $result=true;
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