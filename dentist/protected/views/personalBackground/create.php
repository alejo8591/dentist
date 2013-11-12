<?php
/* @var $this PersonalBackgroundController */
/* @var $model PersonalBackground */

$this->breadcrumbs=array(
	'Personal Backgrounds'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List PersonalBackground', 'url'=>array('index')),
	array('label'=>'Manage PersonalBackground', 'url'=>array('admin')),
);
?>

<h1>Create PersonalBackground</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>