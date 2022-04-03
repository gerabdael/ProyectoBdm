<?php 
    session_start();
include('./header.php')?>
<link href="../scripts/css/LogRegs.css" rel="stylesheet"> 

        <div class="card fa fa-align-center border-primary mb-3" style="width: 50rem; margin-left:50rem; margin-top:25rem; padding:3rem;">
            

            <div class="card-body">
                <form class="form" action="../Model/login_inc.php" method="post"> <i class="fa fa-align-center" aria-hidden="true" id="loginForm"></i>
                    <?php
                        if(isset($_SESSION["user-email"])){
                    ?>
                        <h3 class="card-header"><?php echo $_SESSION["user_email"];?></h3> 
                    <?php
                        }
                        else {
                    ?> 
                        <h3 class="card-header">Login</h3>
                    <?php
                        }
                    ?>  
                    <div class="mb-3 form-group">
                        <label for="InputEmail" class="form-label">Correo Electronico</label>
                        <input type="email" name="email" class="form-control emailInput" id="email" data-bs-toggle="tooltip" data-bs-placement="top" title="Ingresa tu correo registrado" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3 form-group">
                        <label for="InputPassword" class="form-label" >Password</label>
                        <input type="password" name="password" class="form-control" id="password" data-bs-toggle="tooltip" data-bs-placement="top" title="Ingresa tu password registrado" >
                    </div>
                    <button type="submit" name="submit" id="submit" class="btn Custom_btn">Login</button>
                    <a href="./Register.php" class="btn Custom_btn">Registrarse</a>
                </form>
            </div>
        </div>
<?php include('./footer.php')?>
