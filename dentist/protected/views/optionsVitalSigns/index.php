<?php
/* @var $this OptionsVitalSignsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Options Vital Signs',
);

$this->menu=array(
	array('label'=>'Create OptionsVitalSigns', 'url'=>array('create')),
	array('label'=>'Manage OptionsVitalSigns', 'url'=>array('admin')),
);
?>

<h1>Options Vital Signs</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
