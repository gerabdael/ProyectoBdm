<?php 
include('./HeaderFinal.php');
require( '../Classes/newsCompleteCharge.classes.php');
?>


<div class="NewStuff">

<div class="NuevaNoticia">


<table class="table table-striped table-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Titulo noticia</th>
      <th scope="col">Descripcion</th>
      <th scope="col">Comentario</th>
      <th scope="col">Publicar</th>
    </tr>
  </thead>
  <tbody>
    <?php
    
        $fillnewsAproved= new newCompletefill();
        $fillnewsAproved-> newscompletefill( $_SESSION["user_ID"]);
      ?>

  </tbody>
</table>
       
        


</div>

</div>


<?php include('./footer.php')?>