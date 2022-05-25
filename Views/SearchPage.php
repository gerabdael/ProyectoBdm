<?php include('./HeaderFinalSearch.php')?>



<div class="NuevaNoticia">

<div class="container">
  <div class="card-header">
  <h1> Busqueda </h1> 
  </div>

  <div class="card">
  <div class="card-body">

  <div class="row">
  <div class="col-sm">
        <input type="text" placeholder="Search" class="form-control"  aria-describedby="inputGroup-sizing-sm">
        <a class="btn btn-secondary my-sm-2" type="submit" >Palabra clave</a>
      </div>

      <div class="col-sm">
      <h5> Por Fechas: </h5>
      <input type="date" id="birthday" name="birthday"> 
      </div>

      <div class="col-sm">
      <h5> Por cantidad de likes: </h5>
      <div class="dropdown">
      <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
       Cantidad
      </button>
      <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
        <a class="dropdown-item" href="#">Mas a menos</a>
        <a class="dropdown-item" href="#">Menos a mas</a>
      </div>
      </div>
      </div>

   </div>
   </div>
   </div>

<div class="container" style="padding-top: 2rem;">
<div class="row">




<?php 
if($_SESSION["fINDEDnOTICION"] != null){
  ?>
  <div class="col-sm">
   <div class="card" style="width: 39rem;">
   <img style="width: 450px; height:250px" src="<?php echo $_SESSION["fINDEDIMG"] ;    ?>">
  <div class="card-body">
    <h5 class="card-title" id="Noticia1"><?php echo $_SESSION["fINDEDnOTICION"] ?></h5>
    <p class="card-text"><?php echo $_SESSION["fINDEDDescripcion"] ?></p><br>
    <p class="card-text"><?php echo $_SESSION["fINDEDDay"] ?></p>
    
  </div>
 </div>
 </div>
 <?php 
}
  ?>

<?php 
if($_SESSION["fINDEDnOTICION2"] != null){
  ?>
  <div class="col-sm">
  <div class="card" style="width: 39rem;">
  <img style="width: 450px; height:250px" src="<?php echo $_SESSION["fINDEDIMG2"] ;    ?>">
  <div class="card-body">
    <h5 class="card-title" id="Noticia1"><?php echo $_SESSION["fINDEDnOTICION2"] ?></h5>
    <p class="card-text"><?php echo $_SESSION["fINDEDDescripcion2"] ?></p><br>
    <p class="card-text"><?php echo $_SESSION["fINDEDDay2"] ?></p>
    
  </div>
 </div>
 </div>
 <?php 
}
  ?>

<?php 
if($_SESSION["fINDEDnOTICION3"] != null){
  ?>
  <div class="col-sm">
   <div class="card" style="width: 39rem;">
   <img style="width: 450px; height:250px" src="<?php echo $_SESSION["fINDEDIMG3"] ;    ?>">
  <div class="card-body">
    <h5 class="card-title" id="Noticia1"><?php echo $_SESSION["fINDEDnOTICION3"] ?></h5>
    <p class="card-text"><?php echo $_SESSION["fINDEDDescripcion3"] ?></p><br>
    <p class="card-text"><?php echo $_SESSION["fINDEDDay3"] ?></p>
    
  </div>
 </div>
 </div>
 <?php 
}
  ?>




 </div>
</div>


</div>
</div>


<?php include('./footer.php')?>