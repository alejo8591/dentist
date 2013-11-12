<?php
/* @var $this PhoneController */
/* @var $model Phone */

$this->breadcrumbs=array(
	'Phones'=>array('index'),
	$model->id_tbl_phone,
);

$this->menu=array(
	array('label'=>'List Phone', 'url'=>array('index')),
	array('label'=>'Create Phone', 'url'=>array('create')),
	array('label'=>'Update Phone', 'url'=>array('update', 'id'=>$model->id_tbl_phone)),
	array('label'=>'Delete Phone', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_tbl_phone),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Phone', 'url'=>array('admin')),
);
?>

<h1>View Phone #<?php echo $model->id_tbl_phone; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_tbl_phone',
		'id_tbl_anamnesis',
		'type_phone',
		'phone',
		'phone_extension',
		'description',
		'create_user_id',
		'create_time',
		'update_user_id',
		'update_time',
	),
)); ?>
