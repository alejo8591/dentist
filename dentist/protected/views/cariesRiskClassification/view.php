<?php
/* @var $this CariesRiskClassificationController */
/* @var $model CariesRiskClassification */

$this->breadcrumbs=array(
	'Caries Risk Classifications'=>array('index'),
	$model->id_tbl_caries_risk_classification,
);

$this->menu=array(
	array('label'=>'List CariesRiskClassification', 'url'=>array('index')),
	array('label'=>'Create CariesRiskClassification', 'url'=>array('create')),
	array('label'=>'Update CariesRiskClassification', 'url'=>array('update', 'id'=>$model->id_tbl_caries_risk_classification)),
	array('label'=>'Delete CariesRiskClassification', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_tbl_caries_risk_classification),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage CariesRiskClassification', 'url'=>array('admin')),
);
?>

<h1>View CariesRiskClassification #<?php echo $model->id_tbl_caries_risk_classification; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_tbl_caries_risk_classification',
		'id_tbl_dental_examination',
		'name_caries_risk_classification',
		'observation_caries_risk_classification',
		'score_caries_risk_classification',
		'total_sector_caries_risk_classification',
		'create_user_id',
		'create_time',
		'update_user_id',
		'update_time',
	),
)); ?>
