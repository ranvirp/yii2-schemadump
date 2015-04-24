<?php
/**
 * This view is used by console/controllers/MigrateController.php
 * The following variables are available in this view:
 */
/* @var $className string the new migration class name */
echo "<?php\n";
?>

use yii\db\Schema;
use jamband\schemadump\Migration;
use jamband\schemadump\SchemadumpController;

class <?= $className ?> extends Migration
{
    public function safeUp()
    {
      <?php 
       $sd = new \jamband\schemadump\SchemadumpController('a','b');
       echo $sd->actionCreate();
      
      ?>
    }

    public function safeDown()
    {
    <?php 
       $sd = new \jamband\schemadump\SchemadumpController('a','b');
       echo $sd->actionDrop();
      
      ?>
    }
}
