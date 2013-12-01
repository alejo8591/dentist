<?php
/* @var $this PeriodontalTechniqueBrushingController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Periodontal Technique Brushings',
);

$this->menu=array(
	array('label'=>'Create PeriodontalTechniqueBrushing', 'url'=>array('create')),
	array('label'=>'Manage PeriodontalTechniqueBrushing', 'url'=>array('admin')),
);
?>

<h1>Periodontal Technique Brushings</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
