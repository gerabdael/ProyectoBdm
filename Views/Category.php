<?php 
include('../Views/HeaderFinal.php');
include( '../Classes/category.classes.php');
?>

<!-- <div class="allcontainer">
            <div class="LoginBox">
            
                <form class="form" action="../Model/category_inc.php" method="post"> <i class="fa fa-align-center" aria-hidden="true" id="loginForm"></i>
                    <div>    
                        <p>Categoria</p>
                        <input type="text" name="category" class="form-control" id="color" data-bs-toggle="tooltip" data-bs-placement="top" placeholder="Categoria" >
                    </div>    
                    <div>    
                        <p>Descripcion</p>
                        <input type="text" name="Descripcion" class="form-control" id="Descripcion" data-bs-toggle="tooltip" data-bs-placement="top" placeholder="Descripcion" >
                    </div>  
                    <div>    
                    <p>Contraseña</p>
                        <input type="color" name="color" class="form-control" id="color" data-bs-toggle="tooltip" data-bs-placement="top" placeholder="color" >
                    </div>
                    <br><br>
                    <button type="submit" name="submit-category" id="submit" class="btn Custom_btn">Registrar</button>
                </form>
           
            </div>
    
</div> -->
<div class="NewStuff">

<div class="NuevaNoticia">

        <table class="table table-striped table-dark">
        <thead>
            <tr>
                
                <th scope="col">#</th>
                <th scope="col">Categoria</th>
                <th scope="col">Descripcion</th>
                <th scope="col">Color</th>
                <th scope="col">Accion</th>
            </tr>
        </thead>
        <tbody>
        <tr>
        <form class="form" action="../Model/category_inc.php" method="post">
                <tr>
                
                <th></th>
                    <th scope="col"><input type="text" name="category" class="form-control" id="color" data-bs-toggle="tooltip" data-bs-placement="top" placeholder="Categoria" ></th>
                    <th scope="col"><input type="text" name="Descripcion" class="form-control" id="Descripcion" data-bs-toggle="tooltip" data-bs-placement="top" placeholder="Descripcion" ></th>
                    <th scope="col"><input type="color" name="color" class="form-control" id="color" data-bs-toggle="tooltip" data-bs-placement="top" placeholder="color" ></th>
                    <th scope="col">
                        <!-- <button type="submit" name="submit-category" class="btn Custom_btn">Registrar</button> -->
                        <input type="submit" name="submit-category" value="Registrar" class="btn btn-success">
                    </th>
                </tr>
                </form>
            </tr>
            <?php
                $fillcat= new cat();
                $fillcat-> catfill();
            ?>
        </tbody>
    </table>  
</div>
</div>
        
<?php include('./footer.php')?>
