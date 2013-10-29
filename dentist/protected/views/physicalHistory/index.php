<?php
/* @var $this PhysicalHistoryController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Physical Histories',
);

$this->menu=array(
	array('label'=>'Create PhysicalHistory', 'url'=>array('create')),
	array('label'=>'Manage PhysicalHistory', 'url'=>array('admin')),
);
?>

<h1>Physical Histories</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
