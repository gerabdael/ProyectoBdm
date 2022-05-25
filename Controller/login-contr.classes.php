<?php
include "../Classes/login.classes.php";

class LoginContr extends Login{
    private $email;
    private $pwd;

    public function __construct($email,$pwd)
    {
        $this->email = $email;
        $this->pwd = $pwd;
    }
    public function loginUser(){
        if($this->empyInputs() == false){
            echo "<script type='text/javascript'>
            alert('Faltan Campos');
            window.open('../Views/Login.php?','_self');
            </script>";

            exit();
        }else{
            $this -> sign_in($this->email,$this->pwd);
        }
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