<?php    
include "../Classes/dbh.classes.php"; 
class newCompletefill extends Dbh{

    public function newscompletefill($id){
        $news = $this->connect()->prepare('SELECT ID_Noticia,titulo,descripcion FROM noticias where new_status="Terminada" and iduser = ? order by id_noticia desc;');
        $news->execute(array($id));
        $newsInfo = $news->fetchAll((PDO::FETCH_ASSOC));
        $newsCount = $news-> rowCount();
        $x=0;
        while($x < $newsCount){
        ?>

        <tr>
        <form action="../Model/Aprovednews_inc.php" method="POST">
        <th scope="row"><?php echo $newsInfo[$x]["ID_Noticia"]?></th>
        <td><?php echo $newsInfo[$x]["titulo"]?></td>
        <td><?php echo $newsInfo[$x]["descripcion"]?></td>
        
        <td> 
        <div class="d-flex flex-row align-items-start">
            <textarea class="form-control ml-1 shadow-none textarea" value name="commentarioAdmin"></textarea>
        </div>
        </td>
        <td>
           
                <input hidden name="idhiddenid" value="<?php echo $newsInfo[$x]["ID_Noticia"]?>">
                <input hidden name="idhiddentitle" value="<?php echo $newsInfo[$x]["titulo"]?>">
                <input hidden name="idhiddendesc" value="<?php echo $newsInfo[$x]["descripcion"]?>">
                <input type="submit" name="submit_Aproved" value="Aprovar" class="btn btn-success">
                <input type="submit" name="submit_Denied" value="Denegar"  class="btn btn-danger">
            </form>
        </td>
      </tr>

      <?php
      $x++;
    }
 }
}
?>