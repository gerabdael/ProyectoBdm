<?php include('./HeaderFinal.php');
  require( '../Classes/newsAproveCharge.classes.php');?>


<div class="NewStuff">

<div class="NuevaNoticia">


<P>NOTICIAS SIN  APROBAR</P>


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
    
        $fillnewsAproved= new newAprovefill();
        $fillnewsAproved-> newsAprovefill();
      ?>

  </tbody>
</table>
       
        


</div>

</div>


<?php include('./footer.php')?>