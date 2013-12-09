<?php
/* @var $this RipsProceduresController */
/* @var $model RipsProcedures */

$this->breadcrumbs=array(
	'Rips Procedures'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List RipsProcedures', 'url'=>array('index')),
	array('label'=>'Manage RipsProcedures', 'url'=>array('admin')),
);
?>

<h1>Create RipsProcedures</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>