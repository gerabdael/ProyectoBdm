<?php include('./header.php')?>

<div class="container"> 
    <div class="card fa fa-align-center border-primary mb-3"  style="margin-top:10rem;">
        <h3 class="card-header">Crear Noticia</h3>
        <div class="card-body">
            <form> <i class="fa fa-align-center" aria-hidden="true"></i>

                 <div class="mb-3">
                    <label for="InputUser" class="form-label">Titulo </label>
                    <input type="text" class="form-control nameInput" id="Inputtitle" data-bs-toggle="tooltip" data-bs-placement="top" title="Ingresa tu correo registrado" aria-describedby="emailHelp">
                </div>

                <div class="mb-3">
                    <label for="InputEmail" class="form-label">Descripcion</label>
                    <textarea class="form-control" id="DescriptionTextarea" rows="3" style="height: 53px;"></textarea>
                </div>
                <div class="mb-3">
                    <label for="InputEmail" class="form-label">Noticia</label>
                    <textarea class="form-control" id="newsTextarea" rows="3" style="height: 53px;"></textarea>
                </div>

                <label for="date">Fecha de publicacion:</label><div></div>
                <input type="date" id="start" name="fnac" id="newsDate" min="1960-01-01" max="2020-12-31" required autofocus>

                <hr>
                 <div class="mb-3">
                    <label for="InputEmail" class="form-label">Foto Noticia:</label><br>
                    <input type="file" name="fileToUpload" id="fileToUpload">
                </div>
                <hr>
        <!--<div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="Check1">
                    <label class="form-check-label" for="Check1">Check me out</label>
                </div> -->
                <a class="btn btn-primary" href="Index.php"> Regresar
                            <span class="visually-hidden">(current)</span>
                        </a>

                <a type="submit" class="btn btn-primary" id="publishNew">Publicar</a>

            </form>
        </div>
    </div>
    </div>

<?php include('./footer.php')?>