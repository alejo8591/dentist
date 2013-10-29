<?php
/* @var $this AddressController */
/* @var $model Address */

$this->breadcrumbs=array(
	'Addresses'=>array('index'),
	$model->id_tbl_address,
);

$this->menu=array(
	array('label'=>'List Address', 'url'=>array('index')),
	array('label'=>'Create Address', 'url'=>array('create')),
	array('label'=>'Update Address', 'url'=>array('update', 'id'=>$model->id_tbl_address)),
	array('label'=>'Delete Address', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_tbl_address),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Address', 'url'=>array('admin')),
);
?>

<h1>View Address #<?php echo $model->id_tbl_address; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_tbl_address',
		'id_tbl_user',
		'id_tbl_anamnesis',
		'type_address',
		'address',
		'description',
		'create_user_id',
		'create_time',
		'update_user_id',
		'update_time',
	),
)); ?>
