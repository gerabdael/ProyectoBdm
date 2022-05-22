<?php    
include "../Classes/dbh.classes.php"; 
class newAprovefill extends Dbh{

    public function newsAprovefill($id){
        $news = $this->connect()->prepare('SELECT ID_Noticia,titulo,descripcion FROM noticias where new_status="En redaccion" and iduser = ? order by id_noticia desc;');
        $news->execute(array($id));
        $newsInfo = $news->fetchAll((PDO::FETCH_ASSOC));
        $commentario=$this->connect()->prepare('SELECT ComentarioSet FROM comentaproved where ID_ReporteroAux = ? and ID_NoticiaFind =?;');
        $newsCount = $news-> rowCount();
        $x=0;
        while($x < $newsCount){
        $commentario->execute(array($id,$newsInfo[$x]["ID_Noticia"]));
        $commenInfo= $commentario->fetchAll((PDO::FETCH_ASSOC));
        ?>

        <tr>
        <form action="../Model/Aprovednews_inc.php" method="POST">
        <th scope="row"><?php echo $newsInfo[$x]["ID_Noticia"]?></th>
        <td><?php echo $newsInfo[$x]["titulo"]?></td>
        <td><?php echo $newsInfo[$x]["descripcion"]?></td>
        
        <td> 
        <div class="d-flex flex-row align-items-start">
            <textarea class="form-control ml-1 shadow-none textarea" value name="commentarioAdmin"><?php echo $commenInfo[$x]["ComentarioSet"];?></textarea>
        </div>
        </td>
        <td>
           
                <input hidden name="idhiddenid" value="<?php echo $newsInfo[$x]["ID_Noticia"]?>">
                <input hidden name="idhiddentitle" value="<?php echo $newsInfo[$x]["titulo"]?>">
                <input hidden name="idhiddendesc" value="<?php echo $newsInfo[$x]["descripcion"]?>">
                <input type="submit" name="submit_Modificar" value="Modificar" class="btn btn-success">
                <input type="submit" name="submit_Eliminar" value="Eliminar"  class="btn btn-danger">
            </form>
        </td>
      </tr>

      <?php
      $x++;
    }
 }
}
?>