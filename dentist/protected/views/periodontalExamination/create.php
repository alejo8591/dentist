<?php
/* @var $this PeriodontalExaminationController */
/* @var $model PeriodontalExamination */

$this->breadcrumbs=array(
	'Periodontal Examinations'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List PeriodontalExamination', 'url'=>array('index')),
	array('label'=>'Manage PeriodontalExamination', 'url'=>array('admin')),
);
?>

<h1>Create PeriodontalExamination</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>