<?php
/* @var $this CariesRiskClassificationController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Caries Risk Classifications',
);

$this->menu=array(
	array('label'=>'Create CariesRiskClassification', 'url'=>array('create')),
	array('label'=>'Manage CariesRiskClassification', 'url'=>array('admin')),
);
?>

<h1>Caries Risk Classifications</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
