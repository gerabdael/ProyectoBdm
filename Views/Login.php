<?php include('./header.php')?>
        <div class="card fa fa-align-center border-primary mb-3" style="width: 50rem; margin-left:50rem; margin-top:25rem; padding:3rem;">
            <h3 class="card-header">Login</h3>
            <div class="card-body">
                <form> <i class="fa fa-align-center" aria-hidden="true" id="loginForm"></i>
                    <div class="mb-3">
                        <label for="InputEmail" class="form-label">Correo Electronico</label>
                        <input type="email" class="form-control emailInput" id="InputEmail" data-bs-toggle="tooltip" data-bs-placement="top" title="Ingresa tu correo registrado" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="InputPassword" class="form-label" >Password</label>
                        <input type="password" class="form-control" id="InputPassword" data-bs-toggle="tooltip" data-bs-placement="top" title="Ingresa tu password registrado" >
                    </div>
                    <!--         <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="Check1">
                        <label class="form-check-label" for="Check1">Check me out</label>
                    </div> -->
                    <button type="submit" id="loginbutton" class="btn btn-primary">Login</button>
                    <a href="./Register.php" class="btn btn-primary">Registrarse</a>
                </form>
            </div>
        </div>
<?php include('./footer.php')?>
