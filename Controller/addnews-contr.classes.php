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
     private $Keyword;
    private $fileToUpload;
    private $userReporter;

    public function __construct($title,$descripcion,$noticia,$firma,$city,$sub,$country,$fpub,$Keyword,$fileToUpload,$userReporter,$Category)
    {
        $this->title = $title;
        
        $this->descripcion = $descripcion;
        $this->noticia = $noticia;
        $this->firma = $firma;
        $this->city = $city;
       
        $this->sub = $sub;
        $this->country = $country; 
            $this->fpub = $fpub;
        $this->Keyword = $Keyword;
    
        $this->fileToUpload = $fileToUpload;
        $this->userReporter = $userReporter;
        $this->Category = $Category;

    }
    public function addNews(){
        if($this->empyInputs() == false){
            echo "<script type='text/javascript'>
            alert('Faltan Campos');
            window.open('../Views/AddNews.php','_self');
            </script>";
            exit();
        }else{
        $this -> insertNews($this->title,
        $this->descripcion,
        $this->noticia,
        $this->firma,
        $this->city,
       
        $this->sub ,
        $this->country ,
        $this->fpub ,
         $this->Keyword,
        $this->fileToUpload,
        $this->userReporter,
         $this->Category,);            
        }

    }
    public function updatedNews(){
        if($this->empyInputs() == false){
            echo "<script type='text/javascript'>
            alert('Faltan Campos');
            window.open('../Views/AddNews.php','_self');
            </script>";
            exit();
        }else{
        $this -> updateNews($this->title,
        $this->descripcion,
        $this->noticia,
        $this->firma,
        $this->city,
       
        $this->sub ,
        $this->country ,
        $this->fpub ,
         $this->Keyword,
        $this->fileToUpload,
        $this->userReporter,
         $this->Category,);            
        }

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
        $this->Keyword||
        $this->fileToUpload)){
            $result = false;
        }else{
            $result=true;
        }
        return $result;
    }
}
?>