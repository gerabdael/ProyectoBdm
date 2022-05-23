<?php    
include "../Classes/dbh.classes.php";
class Category extends Dbh{
    private $id;
    public function __construct()
    {
        
    }
    public function fill_cat(){
    $cat = $this->connect()->prepare('SELECT * from View_CATEGORIAS2;');
    $cat->execute(array());
    $catInfo = $cat->fetchAll((PDO::FETCH_ASSOC));
    $catCount = $cat-> rowCount();
    ?>
    <br>
    <select class="mb-3" name="category">
    <?php 
    $x =0;
    while($x<$catCount)
    {
    ?>
         <option value="<?php echo $catInfo[$x]["ID_Catego"];?>">
         <?php echo $catInfo[$x]["NombreCat"];?>
        </option>
    <?php 
    $x++;
    }
    ?>
    </select>
    <?php
    }
}
?>