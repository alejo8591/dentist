<?php
/* @var $this OptionsNeckController */
/* @var $model OptionsNeck */

$this->breadcrumbs=array(
	'Options Necks'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List OptionsNeck', 'url'=>array('index')),
	array('label'=>'Manage OptionsNeck', 'url'=>array('admin')),
);
?>

<h1>Create OptionsNeck</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>