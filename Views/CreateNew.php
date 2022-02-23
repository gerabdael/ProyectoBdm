<?php include('./header.php')?>
    <div class="card fa fa-align-center border-primary mb-3" style="width: 50rem; margin-left:50rem; margin-top:25rem; padding:3rem;">
        <h3 class="card-header">Registrarse</h3>
        <div class="card-body">
            <form> <i class="fa fa-align-center" aria-hidden="true"></i>
                <div class="mb-3">
                    <label for="InputEmail" class="form-label">Titulo de la Noticia</label>
                    <input type="email" class="form-control nameInput" id="InputName" data-bs-toggle="tooltip" data-bs-placement="top" title="Ingresa tu correo registrado" aria-describedby="emailHelp">
                </div>
              
                <div class="mb-3">
                    <label for="InputEmail" class="form-label">Descripcion corta de la Noticia</label>
                    <input type="email" class="form-control" id="" data-bs-toggle="tooltip" data-bs-placement="top" title="Ingresa tu correo registrado" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="InputPassword" class="form-label" >Fecha de la noticia</label>
                    <input type="date" class="form-control" id="" data-bs-toggle="tooltip" data-bs-placement="top" title="Ingresa tu password registrado" >
                </div> 
                 <div class="mb-3">
                    <label for="filephoto" class="form-label">Imagen de la noticia</label><br>
                    <input type="file" name="fileToUpload" id="fileToUpload">
                </div>
                <div>
                    <label for="News">Cuerpo de la noticia</label>
                    <textarea autocapitalize="sentences"></textarea>
                </div>
                <hr>
                <button type="submit"  href="./Register.html" class="btn btn-primary">Crear Noticia</button>
                <a type="submit" class="btn btn-primary">Registrarse</a>
            </form>
        </div>
    </div>
<?php include('./footer.php')?>