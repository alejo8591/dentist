<?php
/* @var $this DetailOptionBackgroundController */
/* @var $model DetailOptionBackground */

$this->breadcrumbs=array(
	'Detail Option Backgrounds'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List DetailOptionBackground', 'url'=>array('index')),
	array('label'=>'Manage DetailOptionBackground', 'url'=>array('admin')),
);
?>

<h1>Create DetailOptionBackground</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>