<?php
/* @var $this DentalExaminationController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Dental Examinations',
);

$this->menu=array(
	array('label'=>'Create DentalExamination', 'url'=>array('create')),
	array('label'=>'Manage DentalExamination', 'url'=>array('admin')),
);
?>

<h1>Dental Examinations</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
