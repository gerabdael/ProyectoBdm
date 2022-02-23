<?php include('./header.php')?>
    <!-- noticias grid-->
    <div  class="container" style="margin-top: 10rem;">
        <div class="row">
            
           <h1>Tipo de busqueda</h1>
            <div class="collapse navbar-collapse" id="navbarColor01">
            <form class="d-flex">
                <input class="form-control me-sm-2" type="text" placeholder="Search">
                <a class="btn btn-secondary my-2 my-sm-0" type="submit" >Palabra clave</a>
            </form>
            <p> Por cantidad de likes </p>
            <select name="Filtar por likes" size="1">  
                <option value="mayorlikes"> Mayor > Menor </option>  
                <option value="menoslikes"> Menor > Mayor </option>  
            </select>  
            <p> Por Fechas </p>
            <select name="Filtar por likes" size="1">  
                <option value="Masrecientes"> Mayor > Menor </option>  
                <option value="Masantiguas"> Menor > Mayor </option>  
                <option value="Fechasetre"> Entre (fecha1) y (fecha2) </option>  
             <!--  <option value="Especificadate">  <input placeholder="Select date" type="text" id="example" class="form-control"></option>  -->
            </select>  
            </div>           
        </div>
    </div>    
<?php include('./footer.php')?>