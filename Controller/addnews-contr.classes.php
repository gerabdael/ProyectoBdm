<?php
include "../Classes/addnews.classes.php";

class AddNewsContr extends AddNews{
    private $title;
    private $Category ;
    private $descripcion ;
    private $noticia ;
    private $firma ;
    private $city ;
    private $sub ;
    private $country ;
    private  $fpub;
    private $fileToUpload;
    private $userReporter;

    public function __construct($title,$descripcion,$noticia,$firma,$city,$sub,$country,$fpub,$fileToUpload,$userReporter,$Category)
    {
        $this->title = $title;
        $this->Category = $Category;
        $this->descripcion = $descripcion;
        $this->noticia = $noticia;
        $this->firma = $firma;
        $this->city = $city;
        $this->sub = $sub;
        $this->country = $country;
        $this->fpub = $fpub;
        $this->fileToUpload = $fileToUpload;
        $this->userReporter = $userReporter;

    }
    public function addNews(){
        if($this->empyInputs() == false){
            header("location: ../Views/AddNews.php?error=emptyInput");
            exit();
        }
        $this -> insertNews($this->title,
        $this->descripcion,
        $this->noticia,
        $this->firma,
        $this->city,
        $this->sub ,
        $this->country ,
        $this->fpub ,
        $this->fileToUpload,
        $this->userReporter,
         $this->Category,);
    }

    
    private function empyInputs(){
        $result;
        if(empty($this->title||
        $this->Category||
        $this->descripcion||
        $this->noticia||
        $this->firma||
        $this->city||
        $this->sub ||
        $this->country||
        $this->fpub ||
        $this->fileToUpload)){
            $result = false;
        }else{
            $result=true;
        }
        return $result;
    }
}
?>