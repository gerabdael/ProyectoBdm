<?php include('./header.php')?>   
<div class="container"> 
    <div class="card fa fa-align-center border-primary mb-3"  style="margin-top:10rem;">
        <h3 class="card-header">Registrarse</h3>
        <div class="card-body">
            <form> <i class="fa fa-align-center" aria-hidden="true" name="form"></i>

                 <div class="mb-3">
                    <label for="InputUser" class="form-label">Usuario</label>
                    <input type="text" class="form-control nameInput" id="InputUser" data-bs-toggle="tooltip" data-bs-placement="top" title="Ingresa tu correo registrado" aria-describedby="emailHelp">
                </div>

                <div class="mb-3">
                    <label for="InputEmail" class="form-label">Nombre Completo</label>
                    <input type="text" class="form-control nameInput" id="InputName" data-bs-toggle="tooltip" data-bs-placement="top" title="Ingresa tu correo registrado" aria-describedby="emailHelp">
                </div>
              
                <div class="mb-3">
                    <label for="InputEmail" class="form-label">Correo Electronico</label>
                    <input type="email" class="form-control emailInput" id="InputEmail" data-bs-toggle="tooltip" data-bs-placement="top" title="Ingresa tu correo registrado" aria-describedby="emailHelp">
                </div>

                <div class="mb-3">
                    <label for="InputPassword" class="form-label" >Password</label>
                    <input type="password" class="form-control" id="InputPassword" data-bs-toggle="tooltip" data-bs-placement="top" title="Ingresa tu password registrado" >
                </div> 

                <div class="mb-3">
                    <label for="InputTel" class="form-label"> Telefono</label>
                    <input type="text" class="form-control nameInput" id="InputTel" data-bs-toggle="tooltip" data-bs-placement="top" title="Ingresa tu correo registrado" aria-describedby="emailHelp">
                </div>

                <label for="date">Selecciona tu fecha de nacimiento:</label><div></div>
                <input type="date" id="start" name="fnac" min="1960-01-01" max="2020-12-31" required autofocus>

                <hr>
                 <div class="mb-3">
                    <label for="InputEmail" class="form-label">Foto de Perfil:</label><br>
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

                <a type="submit" class="btn btn-primary" id="registerbutton">Registrarse</a>

            </form>
        </div>
    </div>
    </div>

<?php include('./footer.php')?>