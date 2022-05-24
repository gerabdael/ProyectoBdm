<?php    
include "../Classes/dbh.classes.php";
class newFill extends Dbh{
    private $id;
    public function __construct()
    {
        
    }
    public function newsfill(){
    $news = $this->connect()->prepare('SELECT * FROM SimpleNewsView where new_status="Publicada" order by id_noticia desc;');
    $news->execute(array());
    $newsInfo = $news->fetchAll((PDO::FETCH_ASSOC));
    ?>
           
            <div id="carouselNews" class="carousel slide"style="height: 400px !important;" data-ride="carousel">
                <ol class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselNews" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselNews" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselNews" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </ol>
                <div class="carousel-inner"> 
        <div class="carousel-item active" style="height:400px !important;">
            <img class="d-block" height="50" src="<?php echo $newsInfo[0]["Image"];?>" alt="hi">
            <div class="carousel-caption d-none d-md-block">
                <h5><?php echo $newsInfo[0]["titulo"];?></h5>
                <p><?php echo $newsInfo[0]["descripcion"];?></p>
            </div>
        </div>
        <div class="carousel-item"  style="height:400px !important;">
            <img class="d-block w-100" src="<?php echo $newsInfo[1]["Image"];?>" alt="hi">
            <div class="carousel-caption d-none d-md-block">
                <h5><?php echo $newsInfo[1]["titulo"];?></h5>
                <p><?php echo $newsInfo[1]["descripcion"];?></p>
            </div>
        </div>
        <div class="carousel-item"  style="height:400px !important;" >
            <img class="d-block w-100" src="<?php echo $newsInfo[2]["Image"];?>" alt="hi">
            <div class="carousel-caption d-none d-md-block">
                <h5><?php echo $newsInfo[2]["titulo"];?></h5>
                <p><?php echo $newsInfo[2]["descripcion"];?></p>
                </div> 
            </div>
        </div>
            <a class="carousel-control-prev" href="#carouselNews" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselNews" role="button" data-slide="next">
                    <span class="sr-only">Next</span>
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                </a>
            </div>
            
    <?php
    }
    public function newsfillRecent(){
        $news = $this->connect()->prepare('SELECT id_noticia,titulo,descripcion,Image FROM noticias where new_status="Publicada" order by id_noticia desc;');
        $news->execute(array());
        $newsInfo = $news->fetchAll((PDO::FETCH_ASSOC));
        $newsCount = $news-> rowCount();
        ?>

        <div class="col">
            <div class="card bg-dark text-black">
                <img class="card-img w-20" src="<?php echo $newsInfo[0]["Image"];?>" alt="hi">
                <div class="card-img-overlay">
                <a href="#" onclick="document.getElementById('form-id').submit()"><?php echo $newsInfo[0]["titulo"];?>
                    <form action="../Model/news_inc.php" method="POST" id="form-id">
                        <?php
                        $verificador = $newsInfo[0]["id_noticia"];
                        ?> 
                        <input type="text" name="idnoticia" hidden value='<?php echo $newsInfo[0]["id_noticia"];?>'>
                    </form>
                </a>   
                <a href="#" onclick="document.getElementById('form-id').submit()"><?php echo $newsInfo[0]["descripcion"];?>
                    <form action="../Model/news_inc.php" method="POST" id="form-id">
                        <?php
                        $verificador = $newsInfo[0]["id_noticia"];
                        ?> 
                        <input type="text" name="idnoticia" hidden value='<?php echo $newsInfo[0]["id_noticia"];?>'>
                    </form>
                </a>   
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card bg-dark text-black">
                <img class="card-img w-20" src="<?php echo $newsInfo[1]["Image"];?>" alt="hi">
                <div class="card-img-overlay">
                <a href="#" onclick="document.getElementById('form-id').submit()"><?php echo $newsInfo[1]["titulo"];?>
                    <form action="../Model/news_inc.php" method="POST" id="form-id">
                        <?php
                        $verificador = $newsInfo[1]["id_noticia"];
                        ?> 
                        <input type="text" name="idnoticia" hidden value='<?php echo $newsInfo[1]["id_noticia"];?>'>
                    </form>
                </a>   
                <a href="#" onclick="document.getElementById('form-id').submit()"><?php echo $newsInfo[1]["descripcion"];?>
                    <form action="../Model/news_inc.php" method="POST" id="form-id">
                        <?php
                        $verificador = $newsInfo[1]["id_noticia"];
                        ?> 
                        <input type="text" name="idnoticia" hidden value='<?php echo $newsInfo[1]["id_noticia"];?>'>
                    </form>
                </a>   
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card bg-dark text-black">
                <img class="card-img w-20" src="<?php echo $newsInfo[2]["Image"];?>" alt="hi">
                <div class="card-img-overlay">
                <a href="#" onclick="document.getElementById('form-id').submit()"><?php echo $newsInfo[2]["titulo"];?>
                    <form action="../Model/news_inc.php" method="POST" id="form-id">
                        <?php
                        $verificador = $newsInfo[2]["id_noticia"];
                        ?> 
                        <input type="text" name="idnoticia" hidden value='<?php echo $newsInfo[2]["id_noticia"];?>'>
                    </form>
                </a>   
                <a href="#" onclick="document.getElementById('form-id').submit()"><?php echo $newsInfo[2]["descripcion"];?>
                    <form action="../Model/news_inc.php" method="POST" id="form-id">
                        <?php
                        $verificador = $newsInfo[2]["id_noticia"];
                        ?> 
                        <input type="text" name="idnoticia" hidden value='<?php echo $newsInfo[2]["id_noticia"];?>'>
                    </form>
                </a>   
                </div>
            </div>
        </div>


        <?php
        }
}
?>