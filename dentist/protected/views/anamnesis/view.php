<?php
/* @var $this AnamnesisController */
/* @var $model Anamnesis */

$this->breadcrumbs=array(
	'Anamnesises'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Anamnesis', 'url'=>array('index')),
	array('label'=>'Create Anamnesis', 'url'=>array('create')),
	array('label'=>'Update Anamnesis', 'url'=>array('update', 'id'=>$model->id_tbl_anamnesis)),
	array('label'=>'Delete Anamnesis', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_tbl_anamnesis),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Anamnesis', 'url'=>array('admin')),
);
?>

<h1>View Anamnesis #<?php echo $model->id_tbl_anamnesis; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_tbl_anamnesis',
		'id_tbl_user',
		'name',
		'surname',
		'date_birth',
		'place_of_birth',
		'genre',
		'blood_group',
		'id_tbl_country',
		'id_tbl_city',
		'id_tbl_level_schooling',
		'id_tbl_profession',
		'occupation',
		'contact',
		'id_tbl_healt_regimen',
		'id_tbl_healt_institution',
		'id_tbl_during_consultation',
		'description_healt',
		'family_history',
		'data_personal_history',
		'create_user_id',
		'create_time',
		'update_user_id',
		'update_time',
	),
)); ?>
