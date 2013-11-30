<?php
/* @var $this AtmController */
/* @var $model Atm */

$this->breadcrumbs=array(
	'Atms'=>array('index'),
	$model->id_tbl_atm=>array('view','id'=>$model->id_tbl_atm),
	'Update',
);

$this->menu=array(
	array('label'=>'List Atm', 'url'=>array('index')),
	array('label'=>'Create Atm', 'url'=>array('create')),
	array('label'=>'View Atm', 'url'=>array('view', 'id'=>$model->id_tbl_atm)),
	array('label'=>'Manage Atm', 'url'=>array('admin')),
);
?>

<h1>Update Atm <?php echo $model->id_tbl_atm; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>