<?php
/* @var $this PeriodontalRiskClassificationController */
/* @var $model PeriodontalRiskClassification */

$this->breadcrumbs=array(
	'Periodontal Risk Classifications'=>array('index'),
	$model->id_tbl_periodontal_risk_classification,
);

$this->menu=array(
	array('label'=>'List PeriodontalRiskClassification', 'url'=>array('index')),
	array('label'=>'Create PeriodontalRiskClassification', 'url'=>array('create')),
	array('label'=>'Update PeriodontalRiskClassification', 'url'=>array('update', 'id'=>$model->id_tbl_periodontal_risk_classification)),
	array('label'=>'Delete PeriodontalRiskClassification', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_tbl_periodontal_risk_classification),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage PeriodontalRiskClassification', 'url'=>array('admin')),
);
?>

<h1>View PeriodontalRiskClassification #<?php echo $model->id_tbl_periodontal_risk_classification; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_tbl_periodontal_risk_classification',
		'id_tbl_dental_examination',
		'name_periodontal_risk_classification',
		'flag_periodontal_risk_classification',
		'observation_periodontal_risk_classification',
		'create_user_id',
		'create_time',
		'update_user_id',
		'update_time',
	),
)); ?>
