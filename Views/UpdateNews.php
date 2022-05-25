<?php 



include('./HeaderFinal.php');
require( '../Classes/categories.classes.php');


?>


<div class="NewStuff">

   
       
        <div class="NuevaNoticia">

        <h3>Modificar Noticia</h3>

            <form action="../Model/addnews_inc.php" method="post" enctype="multipart/form-data" > <i class="fa fa-align-center" aria-hidden="true"></i>

                 <div class="mb-3">
                    <label for="InputUser" >Titulo </label>
                    <input type="text" value="<?php echo $_SESSION["tituloMod"];?>" class="form-control nameInput" name= "title"id="Inputtitle" data-bs-toggle="tooltip" data-bs-placement="top" title="Ingresa tu correo registrado" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="category">Categoria</label>
                    <?php
                        $func = new Category();
                        $func->  fill_cat();
                        ?>
                </div>
                <div class="mb-3">
                    <label for="InputEmail" >Descripcion</label>
                    <textarea class="form-control" id="DescriptionTextarea" name="descripcion" rows="3" style="height: 53px;"><?php echo $_SESSION["descripcionMod"];?></textarea>
                </div>
                <div class="mb-3">
                    <label for="InputEmail" >Noticia</label>
                    <textarea class="form-control" id="newsTextarea" name="noticia" rows="3" style="height: 53px;"><?php echo $_SESSION["textoMod"];?></textarea>
                </div>
                <div class="mb-3">
                    <label for="InputUser" >Firma</label>
                    <input type="text" value="<?php echo $_SESSION["FirmaMod"];?>" class="form-control nameInput" name= "firma"id="firma" data-bs-toggle="tooltip" data-bs-placement="top" title="Ingresa tu correo registrado" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="InputUser" >Ciudad</label>
                    <input type="text" value="<?php echo $_SESSION["ciudadMod"];?>" class="form-control nameInput" name= "city"id="city" data-bs-toggle="tooltip" data-bs-placement="top" title="Ingresa tu correo registrado" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="InputUser" >Suburbio</label>
                    <input type="text" value="<?php echo $_SESSION["suburbioMod"];?>" class="form-control nameInput" name= "sub"id="sub" data-bs-toggle="tooltip" data-bs-placement="top" title="Ingresa tu correo registrado" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="InputUser" >País</label>
                    <input type="text" value="<?php echo $_SESSION["countryMod"];?>" class="form-control nameInput" name= "country"id="country" data-bs-toggle="tooltip" data-bs-placement="top" title="Ingresa tu correo registrado" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="InputUser" >Palbra Clave</label>
                    <input type="text" value="<?php echo $_SESSION["KeywordMod"];?>" class="form-control nameInput" name= "keyword"id="keyword" data-bs-toggle="tooltip" data-bs-placement="top" title="Ingresa tu correo registrado" aria-describedby="emailHelp">
                </div>
                <label for="date">Fecha de publicacion:</label><div></div>
                <input type="date" value="<?php echo $_SESSION["DiaeventosMod"];?>" id="start" name="fpub" id="newsDate" name="fecha" min="1960-01-01" max="2020-12-31" required autofocus>
                <hr>
                 <div class="mb-3">
                    <label for="InputEmail" >Foto Noticia:</label><br>
                    <img src="<?php echo $_SESSION["ImageMod"];?>" alt="">
                    <input type="file" name="fileToUpload" id="fileToUpload">
                </div>
                <hr>

                <a class="btn btn-primary" href="Index.php"> Regresar
                            <span class="visually-hidden">(current)</span>
                        </a>

                <input type="submit" name="submit_update" class="btn btn-primary" id="publishNew" value="Publicar">

            </form>
        </div>


  
    </div>


<?php include('./footer.php')?>