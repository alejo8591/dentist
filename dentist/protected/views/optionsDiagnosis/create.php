<?php
/* @var $this OptionsDiagnosisController */
/* @var $model OptionsDiagnosis */

$this->breadcrumbs=array(
	'Options Diagnosises'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List OptionsDiagnosis', 'url'=>array('index')),
	array('label'=>'Manage OptionsDiagnosis', 'url'=>array('admin')),
);
?>

<h1>Create OptionsDiagnosis</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>