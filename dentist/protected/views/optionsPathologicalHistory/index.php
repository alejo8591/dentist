<?php
/* @var $this OptionsPathologicalHistoryController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Options Pathological Histories',
);

$this->menu=array(
	array('label'=>'Create OptionsPathologicalHistory', 'url'=>array('create')),
	array('label'=>'Manage OptionsPathologicalHistory', 'url'=>array('admin')),
);
?>

<h1>Options Pathological Histories</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
