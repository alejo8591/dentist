<?php
/* @var $this PeriodontalChartController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Periodontal Charts',
);

$this->menu=array(
	array('label'=>'Create PeriodontalChart', 'url'=>array('create')),
	array('label'=>'Manage PeriodontalChart', 'url'=>array('admin')),
);
?>

<h1>Periodontal Charts</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
