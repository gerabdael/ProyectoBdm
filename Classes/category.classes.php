<?php
include "../Classes/dbh.classes.php";
class cat extends Dbh{
    protected function inscat($NombreCat,$user,$descripcion,$color){
        $news = $this->connect()->prepare('INSERT  INTO categorias(NombreCat,descripcion,ordercategory,diacreacion,ultimaactualizacion,creadapor,userupdate,Activa,Color) VALUES(?,?,2,sysdate(),sysdate(),?,1,1,?);');
        if(!$news->execute(array($NombreCat,$descripcion,$user,$color))){
        $news = null;
        header("location: ../Views/Category.php?error=stmtfailed");
         exit();
    }
    $news = null;
    }
    
    public function catfill(){
        $category = $this->connect()->prepare('SELECT ID_Catego,NombreCat,descripcion,Color FROM categorias where Activa=1;');
        $category->execute(array());
        $catInfo = $category->fetchAll((PDO::FETCH_ASSOC));
        $catCount = $category-> rowCount();
        $x=0;
        while($x < $catCount){
        ?>

        <tr>
        <form action="../Model/category_inc.php" method="POST">
        <th scope="row"><?php echo $catInfo[$x]["ID_Catego"]?></th>
        <td><input type="text" value="<?php echo $catInfo[$x]["NombreCat"]?>"></td>
        <td><input type="text" value="<?php echo $catInfo[$x]["descripcion"]?>"></td>
        <td ><input name="color" value="<?php echo $catInfo[$x]["Color"]?>" style="background-color:  <?php echo $catInfo[$x]['Color'];?>;" type="color"></td>
        <td>
           
                <input hidden name="idhiddenid" value="<?php echo $catInfo[$x]["ID_Catego"]?>">
                <input hidden name="idhiddentitle" value="<?php echo $catInfo[$x]["NombreCat"]?>">
                <input hidden name="idhiddendesc" value="<?php echo $catInfo[$x]["descripcion"]?>">
                <input type="submit" name="submit_Modificar" value="Modificar" class="btn btn-warning">
                <input type="submit" name="submit_Eliminar" value="Eliminar"  class="btn btn-danger">
            </form>
        </td>
      </tr>

      <?php
      $x++;
    }
 }

 protected function modCat($idhiddenid,$NombreCat,$user,$descripcion,$color){
    $news = $this->connect()->prepare('UPDATE categorias SET NombreCat=?,descripcion=?,ultimaactualizacion=sysdate(),userupdate=?,Color=? where ID_Catego=?');
    if(!$news->execute(array($NombreCat,$descripcion,$user,$color,$idhiddenid))){
    $news = null;
    header("location: ../Views/Category.php?error=stmtfailed");
     exit();
}
$news = null;
}
protected function delCat($idhiddenid){
    $news = $this->connect()->prepare('UPDATE categorias SET Activa=0 where ID_Catego=?;');
    if(!$news->execute(array($idhiddenid))){
    $news = null;
    header("location: ../Views/Category.php?error=stmtfailed");
     exit();
}
$news = null;
}
    }
    ?>