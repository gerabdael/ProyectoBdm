<?php
include "../Controller/Aprovednews-contr.classes.php";

    if(isset($_POST["submit_Aproved"])){
        $idhiddenid = $_POST["idhiddenid"];
        $idhiddentitle = $_POST["idhiddentitle"];
        $idhiddendesc = $_POST["idhiddendesc"];
        $commentarioAdmin= $_POST["commentarioAdmin"];
        
        $aprove = new AprovednewsContr($idhiddenid,
        $idhiddentitle ,
        $idhiddendesc ,
        $commentarioAdmin);
        $aprove-> aproved();

    }else if(isset($_POST["submit_Denied"])){
        $idhiddenid = $_POST["idhiddenid"];
        $idhiddentitle = $_POST["idhiddentitle"];
        $idhiddendesc = $_POST["idhiddendesc"];
        $commentarioAdmin= $_POST["commentarioAdmin"];
        
        $remove = new AprovednewsContr($idhiddenid,
        $idhiddentitle ,
        $idhiddendesc ,
        $commentarioAdmin);
        $remove-> denied();

    }else if(isset($_POST["submit_Modificar"])){
        $idhiddenid = $_POST["idhiddenid"];
        $idhiddentitle = $_POST["idhiddentitle"];
        $idhiddendesc = $_POST["idhiddendesc"];
        $commentarioAdmin= $_POST["commentarioAdmin"];
        
        $remove = new AprovednewsContr($idhiddenid,
        $idhiddentitle ,
        $idhiddendesc ,
        $commentarioAdmin);
        $remove-> modified();

    }else if(isset($_POST["submit_Eliminar"])){
        $idhiddenid = $_POST["idhiddenid"];
        $idhiddentitle = $_POST["idhiddentitle"];
        $idhiddendesc = $_POST["idhiddendesc"];
        $commentarioAdmin= $_POST["commentarioAdmin"];
        
        $remove = new AprovednewsContr($idhiddenid,
        $idhiddentitle ,
        $idhiddendesc ,
        $commentarioAdmin);
        $remove-> deleted();

    }

?>