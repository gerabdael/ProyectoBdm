<?php 
    session_start();
include('./HeaderFinal.php');
require( '../Classes/newfill.classes.php');
?>



   <!-- noticias grid-->
    <div  class="MainPage" >

    <div class="row">
                    <?php
                     $fillnews= new newFill();
                     $fillnews-> newsfill();
                    ?>
            


            <h3>Recientes</h3>
            <?php
            $fillnews->newsfillRecent();
            ?>
       
        </div>

    </div>
   
    <!-- noticias grid-->




    <?php include('./footer.php')?>