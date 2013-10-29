<?php
/* @var $this LevelSchoolingController */
/* @var $model LevelSchooling */

$this->breadcrumbs=array(
	'Level Schoolings'=>array('index'),
	$model->id_tbl_level_schooling=>array('view','id'=>$model->id_tbl_level_schooling),
	'Update',
);

$this->menu=array(
	array('label'=>'List LevelSchooling', 'url'=>array('index')),
	array('label'=>'Create LevelSchooling', 'url'=>array('create')),
	array('label'=>'View LevelSchooling', 'url'=>array('view', 'id'=>$model->id_tbl_level_schooling)),
	array('label'=>'Manage LevelSchooling', 'url'=>array('admin')),
);
?>

<h1>Update LevelSchooling <?php echo $model->id_tbl_level_schooling; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>