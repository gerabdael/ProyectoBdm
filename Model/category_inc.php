<?php
include "../Controller/category-contr.classes.php";
   session_start();
       if(isset($_POST["submit-category"])){
        $NombreCat = $_POST["category"];
        $descripcion = $_POST["Descripcion"];
        $color = $_POST["color"];
        $user= $_SESSION["user_ID"];
       
        $cat= new catContr( $NombreCat,$user,$descripcion,$color);
        $cat->insertCategory(); 
        header("location: ../Views/Category.php");
       }
       if(isset($_POST["submit_Modificar"])){
              $NombreCat = $_POST["idhiddentitle"];
              $descripcion = $_POST["idhiddendesc"];
              $color = $_POST["color"];
              $user= $_SESSION["user_ID"];
              $idhiddenid = $_POST["idhiddenid"];
              $cat= new catContr( $NombreCat,$user,$descripcion,$color);
              $cat->modCategory($idhiddenid); 
              header("location: ../Views/Category.php");
             }

             if(isset($_POST["submit_Eliminar"])){
              $idhiddenid = $_POST["idhiddenid"];
              $cat= new catContr( $NombreCat,$user,$descripcion,$color);
              $cat->delCategory($idhiddenid); 
              header("location: ../Views/Category.php");
             }
      

?>