<?php
/* @var $this OptionsPersonalBackgroundController */
/* @var $model OptionsPersonalBackground */

$this->breadcrumbs=array(
	'Options Personal Backgrounds'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List OptionsPersonalBackground', 'url'=>array('index')),
	array('label'=>'Manage OptionsPersonalBackground', 'url'=>array('admin')),
);
?>

<h1>Create OptionsPersonalBackground</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>