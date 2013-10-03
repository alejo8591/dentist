<?php
/* @var $this BackgroundController */
/* @var $model Background */

$this->breadcrumbs=array(
	'Backgrounds'=>array('index'),
	$model->id_tbl_background,
);

$this->menu=array(
	array('label'=>'List Background', 'url'=>array('index')),
	array('label'=>'Create Background', 'url'=>array('create')),
	array('label'=>'Update Background', 'url'=>array('update', 'id'=>$model->id_tbl_background)),
	array('label'=>'Delete Background', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_tbl_background),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Background', 'url'=>array('admin')),
);
?>

<h1>View Background #<?php echo $model->id_tbl_background; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_tbl_background',
		'id_tbl_personal_history',
		'name_background',
		'description',
		'create_user_id',
		'create_time',
		'update_user_id',
		'update_time',
	),
)); ?>
