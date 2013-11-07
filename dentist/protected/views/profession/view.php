<?php
/* @var $this ProfessionController */
/* @var $model Profession */

$this->breadcrumbs=array(
	'Professions'=>array('index'),
	$model->id_tbl_profession,
);

$this->menu=array(
	array('label'=>'List Profession', 'url'=>array('index')),
	array('label'=>'Create Profession', 'url'=>array('create')),
	array('label'=>'Update Profession', 'url'=>array('update', 'id'=>$model->id_tbl_profession)),
	array('label'=>'Delete Profession', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_tbl_profession),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Profession', 'url'=>array('admin')),
);
?>

<h1>View Profession #<?php echo $model->id_tbl_profession; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_tbl_profession',
		'name_profession',
		'description',
		'create_user_id',
		'create_time',
		'update_user_id',
		'update_time',
	),
)); ?>
