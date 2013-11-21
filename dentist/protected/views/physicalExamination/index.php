<?php
/* @var $this PhysicalExaminationController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Physical Examinations',
);

$this->menu=array(
	array('label'=>'Create PhysicalExamination', 'url'=>array('create')),
	array('label'=>'Manage PhysicalExamination', 'url'=>array('admin')),
);
?>

<h1>Physical Examinations</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
