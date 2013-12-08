<?php
/* @var $this PeriodontalRiskClassificationController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Periodontal Risk Classifications',
);

$this->menu=array(
	array('label'=>'Create PeriodontalRiskClassification', 'url'=>array('create')),
	array('label'=>'Manage PeriodontalRiskClassification', 'url'=>array('admin')),
);
?>

<h1>Periodontal Risk Classifications</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
