<?php
/* @var $this HealtRegimenController */
/* @var $model HealtRegimen */

$this->breadcrumbs=array(
	'Healt Regimens'=>array('index'),
	$model->id_tbl_healt_regimen,
);

$this->menu=array(
	array('label'=>'List HealtRegimen', 'url'=>array('index')),
	array('label'=>'Create HealtRegimen', 'url'=>array('create')),
	array('label'=>'Update HealtRegimen', 'url'=>array('update', 'id'=>$model->id_tbl_healt_regimen)),
	array('label'=>'Delete HealtRegimen', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_tbl_healt_regimen),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage HealtRegimen', 'url'=>array('admin')),
);
?>

<h1>View HealtRegimen #<?php echo $model->id_tbl_healt_regimen; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_tbl_healt_regimen',
		'name_healt_regimen',
		'description',
		// 'create_user_id',
		// 'create_time',
		// 'update_user_id',
		// 'update_time',
	),
)); ?>
