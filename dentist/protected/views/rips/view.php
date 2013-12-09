<?php
/* @var $this RipsController */
/* @var $model Rips */

$this->breadcrumbs=array(
	'Rips'=>array('index'),
	$model->id_tbl_rips,
);

$this->menu=array(
	array('label'=>'List Rips', 'url'=>array('index')),
	array('label'=>'Create Rips', 'url'=>array('create')),
	array('label'=>'Update Rips', 'url'=>array('update', 'id'=>$model->id_tbl_rips)),
	array('label'=>'Delete Rips', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_tbl_rips),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Rips', 'url'=>array('admin')),
);
?>

<h1>View Rips #<?php echo $model->id_tbl_rips; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_tbl_rips',
		'id_tbl_anamnesis',
		'bill_of_sale',
		'create_user_id',
		'create_time',
		'update_user_id',
		'update_time',
	),
)); ?>
