<?php
/* @var $this BackgroundController */
/* @var $model Background */

$this->breadcrumbs=array(
	'Backgrounds'=>array('index'),
	$model->id_tbl_background=>array('view','id'=>$model->id_tbl_background),
	'Update',
);

$this->menu=array(
	array('label'=>'List Background', 'url'=>array('index')),
	array('label'=>'Create Background', 'url'=>array('create')),
	array('label'=>'View Background', 'url'=>array('view', 'id'=>$model->id_tbl_background)),
	array('label'=>'Manage Background', 'url'=>array('admin')),
);
?>

<h1>Update Background <?php echo $model->id_tbl_background; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>