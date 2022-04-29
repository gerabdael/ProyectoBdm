<?php
include "../Classes/profile.classes.php";

class userProfile extends Profile{
    private $email;
    private $user;
    private $name;

    public function __construct($email,$user,$name)
    {
        $this->email = $email;
        $this->user = $user;
        $this->name = $name;

    }
    public function chkprofileUser(){
        $this ->profileUser($this->email,$this->user,$this->name);
    }
}