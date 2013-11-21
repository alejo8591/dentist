<?php
/* @var $this PhysicalExaminationController */
/* @var $model PhysicalExamination */

$this->breadcrumbs=array(
	'Physical Examinations'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List PhysicalExamination', 'url'=>array('index')),
	array('label'=>'Manage PhysicalExamination', 'url'=>array('admin')),
);
?>

<h1>Create PhysicalExamination</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>