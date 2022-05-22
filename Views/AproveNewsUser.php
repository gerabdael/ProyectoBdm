<?php include('./HeaderFinal.php');
  require( '../Classes/newsAproveCharge.classes.php');?>


<div class="NewStuff">

<div class="NuevaNoticia">


<h3>NOTICIAS SIN  APROBAR</h3>


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
        $iduser=$_SESSION["user_ID"];
        $fillnewsAproved= new newAprovefill();
        $fillnewsAproved-> newsAprovefill($iduser);
      ?>

  </tbody>
</table>
       
        


</div>

</div>


<?php include('./footer.php')?>