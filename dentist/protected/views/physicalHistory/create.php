<?php
/* @var $this PhysicalHistoryController */
/* @var $model PhysicalHistory */

$this->breadcrumbs=array(
	'Physical Histories'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List PhysicalHistory', 'url'=>array('index')),
	array('label'=>'Manage PhysicalHistory', 'url'=>array('admin')),
);
?>

<h1>Create PhysicalHistory</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>