<?php
/* @var $this OptionsExtraoralExaminationController */
/* @var $model OptionsExtraoralExamination */

$this->breadcrumbs=array(
	'Options Extraoral Examinations'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List OptionsExtraoralExamination', 'url'=>array('index')),
	array('label'=>'Manage OptionsExtraoralExamination', 'url'=>array('admin')),
);
?>

<h1>Create OptionsExtraoralExamination</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>