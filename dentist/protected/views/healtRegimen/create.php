<?php
/* @var $this HealtRegimenController */
/* @var $model HealtRegimen */

$this->breadcrumbs=array(
	'Healt Regimens'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List HealtRegimen', 'url'=>array('index')),
	array('label'=>'Manage HealtRegimen', 'url'=>array('admin')),
);
?>

<h1>Create HealtRegimen</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>