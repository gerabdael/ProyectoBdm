<?php include('./Header2.php');
require( '../Classes/comments.classes.php');
  if(!isset($_SESSION)) 
  { 
      session_start(); 
  } 
?>
 
<div class="container" style="margin-top: 1rem;"> 
<div class="bs-docs-section" id="myGroup" style="padding: 3rem;">

<div class="row">
    <div class="col-lg-12">
    <div class="bs-component">
    <div class="card mb-3">
      <h3 class="card-header"><?php echo  $_SESSION["titulo"];?></h3>
      <div class="card-body">
        <h5 class="card-title"><?php echo $_SESSION["descripcion"];?></h5>
        <h6 class="card-subtitle text-muted"><?php echo  $_SESSION["country"];?>,<?php echo  $_SESSION["suburbio"]; ?>,<?php echo $_SESSION["ciudad"] ;?></h6>
      </div>
<!--       <svg xmlns="http://www.w3.org/2000/svg" class="d-block user-select-none" width="100%" height="200" aria-label="Placeholder: Image cap" focusable="false" role="img" preserveAspectRatio="xMidYMid slice" viewBox="0 0 318 180" style="font-size:1.125rem;text-anchor:middle">
        <rect width="100%" height="100%" fill="#868e96"></rect>
        <text x="50%" y="50%" fill="#dee2e6" dy=".3em">Image</text>
      </svg> -->
      <img src="<?php echo $_SESSION["Image"];?> " alt="">
      <div class="card-body">
        <p class="card-text"><?php echo $_SESSION["texto"];?></p>
      </div>
    
      <div class="card-body">
      
      <button class="btn btn-outline-secondary" type="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="collapseExample" data-bs-target="#collapseExample">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-text-paragraph" viewBox="0 0 16 16">
        <path fill-rule="evenodd" d="M2 12.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm0-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5zm0-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5zm4-3a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5z"/>
        </svg>
      </button>
    <form action="../Model/likes_inc.php" method="POST">
      <button type="submit" name="submit_likes" class="btn btn-outline-secondary">
        
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
          <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/>
        </svg>
                  <?php echo  $_SESSION["likes"]?>
        </button>
      </form>
      <form action="../Model/likes_inc.php" method="POST">
      <button type="submit" name="submit_dislikes" class="btn btn-outline-secondary">
        
                 Dislike
        </button>
      </form>
      </div>

      <div class="collapse" id="collapseExample">
          <div class="card-body">
          <form action="../Model/commentchild_inc.php" method="POST"> 
            <div class="d-flex flex-row align-items-start">
              <textarea class="form-control ml-1 shadow-none textarea" name="comment-text"></textarea>
            </div>
              <div class="mt-2 text-right">
              <button class="btn btn-primary btn-sm shadow-none" name="comment" type="submit">Post comment</button>
              <button class="btn btn-outline-primary btn-sm ml-1 shadow-none" type="button">Cancel</button>
            </form>
            </div>
          
          </div>
          </div>

<div class="container">
<div class="row">
        <?php
        $newscommentsfill = new commentsFill();
        $newscommentsfill -> commentfill($_SESSION["ID_Noticia"]);
        ?> 

</div>


</div>



      <div class="card-footer text-muted">

      </div>


    </div>
</div>
</div>

</div>
</div>


</div>
</div>




    <!-- noticias grid-->
    <?php include('./footer.php')?>