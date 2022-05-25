<?php    
include "../Classes/dbh.classes.php";
class commentsFill extends Dbh{
    private $id;
    public function __construct()
    {
        
    }
    public function commentfill($idnews){
    $comments = $this->connect()->prepare('SELECT * FROM ComentsViewParaGera where defaultActive=1 and IDnoticiaWhere = ?;');
    $comments->execute(array($idnews));
    $commentsInfo = $comments->fetchAll((PDO::FETCH_ASSOC));
    $commCount= $comments ->rowCount();
    $count=0;
    while($count < $commCount){ 
        if($commentsInfo[$count]["PARENT"]==null){
    ?>
<div class="card mb-3" style="max-width: 40rem;">
            <div class="row g-0">
              <div class="col-md-4">
                <img src="https://i.ibb.co/xstT9Hx/7by1wlrdjob61.jpg" class="img-fluid rounded-start" alt="...">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title"><?php 
                  echo $commentsInfo[$count]["Username"] ?>
                  </h5>
                  <p class="card-text"><?php 
                  echo $commentsInfo[$count]["TextoComent"] 
                  ?></p>
                  <p>
                  <a class="btn btn-primary" data-bs-toggle="collapse" href="#CollapseComments" role="button" aria-expanded="false" aria-bs-controls="CollapseComments">Comment</a>
                  </p>

                  <div class="collapse" id="CollapseComments">
          <div class="card-body">

          <div class="d-flex flex-row align-items-start">
            <form action="../Model/commentchild_inc.php" method="POST">
              <textarea name="comment-text" class="form-control ml-1 shadow-none textarea"></textarea></div>
              <div class="mt-2 text-right">
            
                        <input type="text" name="idnoticia" hidden value='<?php echo $commentsInfo[$count]["id_noticia"];?>'>
                        <input type="text" name="idcomment" hidden value='<?php echo $commentsInfo[$count]["ID"];?>'>  
                        <button class="btn btn-primary btn-sm shadow-none" type="submit" name="commentchild">Post comment</button>
                        <button class="btn btn-outline-primary btn-sm ml-1 shadow-none" type="button">Cancel</button>
                    </form>

            </div>
          
          </div>
          </div>

                  <p class="card-text"><small class="text-muted"><?php echo $commentsInfo[$count]["fechacreacion"] ?></small></p>
                </div>
              </div>
            </div>
          </div>

              <?php
              $count++;
        }else{
    ?>

          <div class="row" style="padding-left: 5rem">
          <div class="col">
          <div class="collapse multi-collapse" id="CollapseComments">

          <div class="card mb-3" style="max-width: 55rem;">
            <div class="row g-0">
              <div class="col-md-4">
                <img src="https://i.ibb.co/xstT9Hx/7by1wlrdjob61.jpg" class="img-fluid rounded-start" alt="...">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title"><?php
                   echo $commentsInfo[$count]["Username"] ?></h5>
                  <p class="card-text"><?php 
                  echo $commentsInfo[$count]["TextoComent"] ?></p>
                  <p class="card-text"><small class="text-muted"><?php echo $commentsInfo[$count]["fechacreacion"] ?></small></p>
                </div>
              </div>
            </div>
          </div>

          </div>
          </div>
          </div>
    <?php 
    $count++;
          }?>
<?php 
        } 
    }
}
?>