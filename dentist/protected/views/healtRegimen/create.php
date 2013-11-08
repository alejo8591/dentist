<?php
/* @var $this HealtRegimenController */
/* @var $model HealtRegimen */

$this->breadcrumbs=array(
	'Healt Regimens'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Listar los Regimen', 'url'=>array('index')),
	array('label'=>'Administrar los Regimen', 'url'=>array('admin')),
);
?>

<h1>Crear Regimen de Salud</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>