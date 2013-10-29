<?php
/* @var $this DuringConsultationController */
/* @var $model DuringConsultation */

$this->breadcrumbs=array(
	'During Consultations'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List DuringConsultation', 'url'=>array('index')),
	array('label'=>'Manage DuringConsultation', 'url'=>array('admin')),
);
?>

<h1>Create DuringConsultation</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>