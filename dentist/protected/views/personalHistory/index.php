<?php
/* @var $this PersonalHistoryController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Personal Histories',
);

$this->menu=array(
	array('label'=>'Create PersonalHistory', 'url'=>array('create')),
	array('label'=>'Manage PersonalHistory', 'url'=>array('admin')),
);
?>

<h1>Personal Histories</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
