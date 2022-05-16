<?php 
include('./HeaderFinal.php')?>
        
    


    
    <div class="BoxContent2">
        
        <h3 class="PresentationStuff">Registrarse</h3><br><br>
      
            <form action="../Model/registerReporter_inc.php" method="post" enctype="multipart/form-data"> 
                <i class="fa fa-align-center" aria-hidden="true" name="form"></i>
                 <div>
                    <label for="InputUser" class="form-label">Usuario</label>
                    <ul>
                    <input type="text" name="user" id="InputUser" class="form-control nameInput" placeholder="Ingresa tu usuario">
                    </ul>
                </div>

                <div>
                    <label for="InputName" class="form-label">Nombre Completo</label>
                    <ul>
                    <input type="text" class="form-control nameInput" name="completeName" id="InputName"  placeholder="Ingresa tu nombre completo">
                    </ul>
                </div>
              
                <div>
                    <label for="InputEmail" class="form-label">Correo Electronico</label>
                    <ul>
                    <input type="email" class="form-control emailInput" name="email" id="InputEmail"  placeholder="Ingresa tu correo electronico">
                    </ul>
                </div>

                <div>
                    <label for="InputPassword" class="form-label" >Password</label>
                    <ul>
                    <input type="password" class="form-control" name="password" id="InputPassword"  placeholder="Ingresa tu contraseña" >
                    </ul>
                </div> 
                <div>
                    <label for="ConfirmInputPassword" class="form-label" >Confirmar Password</label>
                    <ul>
                    <input type="password" class="form-control" name="confirmPassword" id="ConfirmInputPassword" placeholder="Confirma tu contraseña">
                    </ul>
                </div> 
                <div>
                    <label for="InputTel" class="form-label"> Telefono</label>
                    <ul>
                    <input type="text" class="form-control " name="telephone" id="InputTel"  placeholder="Ingresa tu telefono">
                    </ul>
                </div>
                <hr>
                <div>
                    <label for="userPhoto" class="form-label">Foto de Perfil:</label><br>
                    <input type="file" name="rPhoto" placeholder="ingrese foto">  
                </div>
                <hr>
                <a  href="Login.php"> Regresar
                            <span class="visually-hidden">(current)</span>
                        </a>

                    
                <input type="submit" name="submit" id="registerbutton" value="Registrar" style= "border-radius: 15px;  color: #fff;
                background-color: #eb2651;;
                border-color: #b42424;  padding: 5px;
                position: relative;
                box-shadow: 0 1px 2px rgba(0, 0, 0, 0.05);
                text-decoration: none;
                text-align: justify;">
                <br>

            </form>
       
  
    </div>



<?php include('./footer.php')?>