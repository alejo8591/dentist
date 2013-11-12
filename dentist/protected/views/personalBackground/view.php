<?php
/* @var $this PersonalBackgroundController */
/* @var $model PersonalBackground */

$this->breadcrumbs=array(
	'Personal Backgrounds'=>array('index'),
	$model->id_tbl_personal_background,
);

$this->menu=array(
	array('label'=>'List PersonalBackground', 'url'=>array('index')),
	array('label'=>'Create PersonalBackground', 'url'=>array('create')),
	array('label'=>'Update PersonalBackground', 'url'=>array('update', 'id'=>$model->id_tbl_personal_background)),
	array('label'=>'Delete PersonalBackground', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_tbl_personal_background),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage PersonalBackground', 'url'=>array('admin')),
);
?>

<h1>View PersonalBackground #<?php echo $model->id_tbl_personal_background; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_tbl_personal_background',
		'id_tbl_anamnesis',
		'create_user_id',
		'create_time',
		'update_user_id',
		'update_time',
	),
)); ?>
