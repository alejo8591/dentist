<?php
/* @var $this CariesRiskClassificationController */
/* @var $model CariesRiskClassification */

$this->breadcrumbs=array(
	'Caries Risk Classifications'=>array('index'),
	$model->id_tbl_caries_risk_classification=>array('view','id'=>$model->id_tbl_caries_risk_classification),
	'Update',
);

$this->menu=array(
	array('label'=>'List CariesRiskClassification', 'url'=>array('index')),
	array('label'=>'Create CariesRiskClassification', 'url'=>array('create')),
	array('label'=>'View CariesRiskClassification', 'url'=>array('view', 'id'=>$model->id_tbl_caries_risk_classification)),
	array('label'=>'Manage CariesRiskClassification', 'url'=>array('admin')),
);
?>

<h1>Update CariesRiskClassification <?php echo $model->id_tbl_caries_risk_classification; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>