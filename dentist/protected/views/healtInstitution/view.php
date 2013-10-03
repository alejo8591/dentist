<?php
/* @var $this HealtInstitutionController */
/* @var $model HealtInstitution */

$this->breadcrumbs=array(
	'Healt Institutions'=>array('index'),
	$model->id_tbl_healt_institution,
);

$this->menu=array(
	array('label'=>'List HealtInstitution', 'url'=>array('index')),
	array('label'=>'Create HealtInstitution', 'url'=>array('create')),
	array('label'=>'Update HealtInstitution', 'url'=>array('update', 'id'=>$model->id_tbl_healt_institution)),
	array('label'=>'Delete HealtInstitution', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_tbl_healt_institution),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage HealtInstitution', 'url'=>array('admin')),
);
?>

<h1>View HealtInstitution #<?php echo $model->id_tbl_healt_institution; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_tbl_healt_institution',
		'id_tbl_healt_regimen',
		'name_healt_institution',
		'id_healt_institution',
		'description',
		// 'create_user_id',
		// 'create_time',
		// 'update_user_id',
		// 'update_time',
	),
)); ?>
