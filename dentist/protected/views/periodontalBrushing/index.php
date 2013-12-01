<?php
/* @var $this PeriodontalBrushingController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Periodontal Brushings',
);

$this->menu=array(
	array('label'=>'Create PeriodontalBrushing', 'url'=>array('create')),
	array('label'=>'Manage PeriodontalBrushing', 'url'=>array('admin')),
);
?>

<h1>Periodontal Brushings</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
