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

<div class="col-sm">
   <div class="card" style="width: 39rem;">
  <img class="card-img-top" src="..." alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
 </div>
 </div>

 <div class="col-sm">
   <div class="card" style="width: 39rem;">
  <img class="card-img-top" src="..." alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
 </div>
 </div>


 </div>
</div>


</div>
</div>


<?php include('./footer.php')?>