<?php
/* @var $this CityController */
/* @var $model City */

$this->breadcrumbs=array(
	'Cities'=>array('index'),
	$model->id_tbl_city=>array('view','id'=>$model->id_tbl_city),
	'Update',
);

$this->menu=array(
	array('label'=>'List City', 'url'=>array('index')),
	array('label'=>'Create City', 'url'=>array('create')),
	array('label'=>'View City', 'url'=>array('view', 'id'=>$model->id_tbl_city)),
	array('label'=>'Manage City', 'url'=>array('admin')),
);
?>

<h1>Update City <?php echo $model->id_tbl_city; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>