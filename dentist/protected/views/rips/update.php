<?php
/* @var $this RipsController */
/* @var $model Rips */

$this->breadcrumbs=array(
	'Rips'=>array('index'),
	$model->id_tbl_rips=>array('view','id'=>$model->id_tbl_rips),
	'Update',
);

$this->menu=array(
	array('label'=>'List Rips', 'url'=>array('index')),
	array('label'=>'Create Rips', 'url'=>array('create')),
	array('label'=>'View Rips', 'url'=>array('view', 'id'=>$model->id_tbl_rips)),
	array('label'=>'Manage Rips', 'url'=>array('admin')),
);
?>

<h1>Update Rips <?php echo $model->id_tbl_rips; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>