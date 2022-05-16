<?php    
include "../Classes/dbh.classes.php";
class newAprovefill extends Dbh{
    private $id;
    public function __construct()
    {
        
    }
    public function newsAprovefill(){
        $news = $this->connect()->prepare('SELECT ID_Noticia,titulo,descripcion FROM noticias where new_status="Terminada" order by id_noticia desc;');
        $news->execute(array());
        $newsInfo = $news->fetchAll((PDO::FETCH_ASSOC));
        $newsCount = $news-> rowCount();
        $x=0;
        while($x < $newsCount){

?>

        <tr>
        <th scope="row"><?php echo $newsInfo[$x]["ID_Noticia"]?></th>
        <td><?php echo $newsInfo[$x]["titulo"]?></td>
        <td><?php echo $newsInfo[$x]["descripcion"]?></td>
        <form>
        <td> 
        <div class="d-flex flex-row align-items-start">
            <textarea class="form-control ml-1 shadow-none textarea" name="commentarioAdmin"></textarea>
        </div>
        </td>
        <td>
           
                <input hidden name="idhidden" value="<?php echo $newsInfo[$x]["ID_Noticia"]?>">
                <input type="submit" name="submit_Aproved" value="Aprovada" class="btn btn-success">
                <input type="submit" name="submit_Denied" value="Negada"  class="btn btn-danger">
            </form>
        </td>
      </tr>

      <?php
      $x++;
    }
 }
}
?>