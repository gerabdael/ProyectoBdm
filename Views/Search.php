<?php include('./header2.php')?>
    <!-- noticias grid-->
    <div  class="container" style="margin-top: 10rem;">
        <div class="row">
            <div>  
                <h1>Busqueda</h1>

                <div class="row align-items-center">
                    <div class="col-3">
                        <form class="d-flex">
                            <input type="text" placeholder="Search" class="form-control"  aria-describedby="inputGroup-sizing-sm">
                            <a class="btn btn-secondary my-1 my-sm-0" type="submit" >Palabra clave</a>
                        </form>
                    </div>
                    <div class="col">
                        <label> Por cantidad de likes: </label>
                        <select name="Filtar por likes" size="1">  
                            <option value="mayorlikes"> Mayor > Menor </option>  
                            <option value="menoslikes"> Menor > Mayor </option>  
                        </select>
                    </div>  
                    <div class="col" style="align-content: center;">
                        <label> Por Fechas: </label>
                        <input type="date" id="birthday" name="birthday">
                    </div>
                </div>
            </div>           
        </div>
    </div>    
<?php include('./footer.php')?>