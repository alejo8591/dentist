<?php
/* @var $this OptionsPathologicalHistoryController */
/* @var $model OptionsPathologicalHistory */

$this->breadcrumbs=array(
	'Options Pathological Histories'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List OptionsPathologicalHistory', 'url'=>array('index')),
	array('label'=>'Manage OptionsPathologicalHistory', 'url'=>array('admin')),
);
?>

<h1>Create OptionsPathologicalHistory</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>