<?php
/* @var $this Rh1ValuesController */
/* @var $model Rh1Values */

$this->breadcrumbs=array(
	'Rh1 Values'=>array('index'),
	$model->id_tbl_rh1_values=>array('view','id'=>$model->id_tbl_rh1_values),
	'Update',
);

$this->menu=array(
	array('label'=>'List Rh1Values', 'url'=>array('index')),
	array('label'=>'Create Rh1Values', 'url'=>array('create')),
	array('label'=>'View Rh1Values', 'url'=>array('view', 'id'=>$model->id_tbl_rh1_values)),
	array('label'=>'Manage Rh1Values', 'url'=>array('admin')),
);
?>

<h1>Update Rh1Values <?php echo $model->id_tbl_rh1_values; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>