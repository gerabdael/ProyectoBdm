<?php
include "../Classes/registerReporter.classes.php";
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
                echo "<script type='text/javascript'>
                alert('Error en los campos');
                window.open('../Views/RegisterReporter.php','_self');
                </script>";
                exit();
            }
            if($this->chkpswrd($this->password)==false){
                echo "<script type='text/javascript'>
                alert('Contraseña Invalida');
                window.open('../Views/RegisterReporter.php','_self');
                </script>";
                exit();
            }
            if($this->matchPwd()==false){
                echo "<script type='text/javascript'>
                alert('Las contraseñas deben ser iguales');
                window.open('../Views/RegisterReporter.php','_self');
                </script>";
                exit();
            }
            if($this->checkUser($this->email,$this->user)==false){
               
                echo "<script type='text/javascript'>
                alert('Error con usuario');
                window.open('../Views/RegisterReporter.php','_self');
                </script>";
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