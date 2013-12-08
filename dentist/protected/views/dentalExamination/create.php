<?php
/* @var $this DentalExaminationController */
/* @var $model DentalExamination */

$this->breadcrumbs=array(
	'Dental Examinations'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List DentalExamination', 'url'=>array('index')),
	array('label'=>'Manage DentalExamination', 'url'=>array('admin')),
);
?>

<h1>Create DentalExamination</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>