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
        $aprove-> aprove();

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

    }
    $login -> loginUser();
    header("location: ../Views/Profile.php?error=none");
?>