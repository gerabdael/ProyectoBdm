<?php 
    session_start();
include('./HeaderFinal.php')?>



        
            
            <div class="allcontainer">

            <div class="LoginBox">
            
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
                    <h1>Login</h1><br><br><br>
                    <div class="mb-3 form-group">
                        <p>Correo Electronico</p>
                        <input type="email" name="email" class="form-control emailInput" id="email" data-bs-toggle="tooltip" data-bs-placement="top" placeholder="Correo Electronico">
                    </div>
                    <div class="mb-3 form-group">
                        <p>Contraseña</p>
                        <input type="password" name="password" class="form-control" id="password" data-bs-toggle="tooltip" data-bs-placement="top" placeholder="Password" >
                    </div>
                    <br><br>
                    <button type="submit" name="submit" id="submit" class="btn Custom_btn">Login</button>
                    <a href="./Register.php" class="btn Custom_btn">Registrarse</a>
                </form>
                
           
           
            </div>
      
            </div>
          
        
<?php include('./footer.php')?>
