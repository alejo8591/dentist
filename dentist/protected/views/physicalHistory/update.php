<?php
/* @var $this PhysicalHistoryController */
/* @var $model PhysicalHistory */

$this->breadcrumbs=array(
	'Physical Histories'=>array('index'),
	$model->id_tbl_physical_history=>array('view','id'=>$model->id_tbl_physical_history),
	'Update',
);

$this->menu=array(
	array('label'=>'List PhysicalHistory', 'url'=>array('index')),
	array('label'=>'Create PhysicalHistory', 'url'=>array('create')),
	array('label'=>'View PhysicalHistory', 'url'=>array('view', 'id'=>$model->id_tbl_physical_history)),
	array('label'=>'Manage PhysicalHistory', 'url'=>array('admin')),
);
?>

<h1>Update PhysicalHistory <?php echo $model->id_tbl_physical_history; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>