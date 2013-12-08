<?php
/* @var $this AnamnesisController */
/* @var $model Anamnesis */

$this->breadcrumbs=array(
	'Anamnesises'=>array('index'),
	$model->id_tbl_anamnesis,
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
		'username',
		'first_name',
		'middle_name',
		'paternal_surname',
		'mothers_maiden_name',
		'date_birth',
		'place_of_birth',
		'age',
		'genre',
		'blood_group',
		'id_tbl_country',
		'id_tbl_city',
		'locality',
		'id_tbl_level_schooling',
		'id_tbl_profession',
		'occupation',
		'contact',
		'id_tbl_healt_regimen',
		'id_tbl_healt_institution',
		'description_healt',
		'family_history',
		'create_user_id',
		'create_time',
		'update_user_id',
		'update_time',
	),
)); ?>
