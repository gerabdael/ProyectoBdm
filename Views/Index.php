<?php include('./header.php')?>   
   <!-- noticias grid-->
    <div  class="container" style="margin-top: 10rem;">
        <div class="row">
            <div id="carouselNews" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselNews" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselNews" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselNews" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="../Content/Pikachu.jpg" alt="hi">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Amaizing</h5>
                            <p>Impresionanti</p>
                          </div>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="../Content/Pokemon.png" alt="hi1">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Amaizing</h5>
                            <p>Impresionanti</p>
                          </div>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="../Content/Pikachu.jpg" alt="h11i">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Amaizing</h5>
                            <p>Impresionanti</p>
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
            <h3>Recientes</h3>
            <div class="col">
                <div class="card bg-dark text-white">
                <img src="../Content/Pikachu.jpg" class="card-img" alt="...">
                    <div class="card-img-overlay">
                        <h5 class="card-title">Titulo de noticias</h5>
                        <p class="card-text">Last updated 3 mins ago</p>
                    </div>
                </div>
            </div>
            <div class="col">
            <div class="card bg-dark text-white">
                <img src="../Content/Pikachu.jpg" class="card-img" alt="...">
                    <div class="card-img-overlay">
                        <h5 class="card-title">Titulo de noticias</h5>
                        <p class="card-text">Last updated 3 mins ago</p>
                    </div>
                </div>
            </div>
            <div class="col">
            <div class="card bg-dark text-white">
                <img src="../Content/Pikachu.jpg" class="card-img" alt="...">
                    <div class="card-img-overlay">
                        <h5 class="card-title">Titulo de noticias</h5>
                        <p class="card-text">Last updated 3 mins ago</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- noticias grid-->
    <?php include('./footer.php')?>