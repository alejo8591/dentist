<?php
/* @var $this PeriodontalRiskClassificationController */
/* @var $model PeriodontalRiskClassification */

$this->breadcrumbs=array(
	'Periodontal Risk Classifications'=>array('index'),
	$model->id_tbl_periodontal_risk_classification=>array('view','id'=>$model->id_tbl_periodontal_risk_classification),
	'Update',
);

$this->menu=array(
	array('label'=>'List PeriodontalRiskClassification', 'url'=>array('index')),
	array('label'=>'Create PeriodontalRiskClassification', 'url'=>array('create')),
	array('label'=>'View PeriodontalRiskClassification', 'url'=>array('view', 'id'=>$model->id_tbl_periodontal_risk_classification)),
	array('label'=>'Manage PeriodontalRiskClassification', 'url'=>array('admin')),
);
?>

<h1>Update PeriodontalRiskClassification <?php echo $model->id_tbl_periodontal_risk_classification; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>