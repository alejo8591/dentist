<?php
/* @var $this CariesRiskClassificationController */
/* @var $model CariesRiskClassification */

$this->breadcrumbs=array(
	'Caries Risk Classifications'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List CariesRiskClassification', 'url'=>array('index')),
	array('label'=>'Manage CariesRiskClassification', 'url'=>array('admin')),
);
?>

<h1>Create CariesRiskClassification</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>