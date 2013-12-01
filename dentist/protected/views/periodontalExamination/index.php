<?php
/* @var $this PeriodontalExaminationController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Periodontal Examinations',
);

$this->menu=array(
	array('label'=>'Create PeriodontalExamination', 'url'=>array('create')),
	array('label'=>'Manage PeriodontalExamination', 'url'=>array('admin')),
);
?>

<h1>Periodontal Examinations</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
