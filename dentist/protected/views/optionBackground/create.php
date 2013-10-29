<?php
/* @var $this OptionBackgroundController */
/* @var $model OptionBackground */

$this->breadcrumbs=array(
	'Option Backgrounds'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List OptionBackground', 'url'=>array('index')),
	array('label'=>'Manage OptionBackground', 'url'=>array('admin')),
);
?>

<h1>Create OptionBackground</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>