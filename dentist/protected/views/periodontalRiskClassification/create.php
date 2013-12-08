<?php
/* @var $this PeriodontalRiskClassificationController */
/* @var $model PeriodontalRiskClassification */

$this->breadcrumbs=array(
	'Periodontal Risk Classifications'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List PeriodontalRiskClassification', 'url'=>array('index')),
	array('label'=>'Manage PeriodontalRiskClassification', 'url'=>array('admin')),
);
?>

<h1>Create PeriodontalRiskClassification</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>