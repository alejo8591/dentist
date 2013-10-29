<?php
/* @var $this PersonalHistoryController */
/* @var $model PersonalHistory */

$this->breadcrumbs=array(
	'Personal Histories'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List PersonalHistory', 'url'=>array('index')),
	array('label'=>'Manage PersonalHistory', 'url'=>array('admin')),
);
?>

<h1>Create PersonalHistory</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>