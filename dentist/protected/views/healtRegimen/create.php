<?php
/* @var $this HealtRegimenController */
/* @var $model HealtRegimen */

$this->breadcrumbs=array(
	'Régime de Salud'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listar los Regimen', 'url'=>array('index')),
);
?>

<h1>Crear Régimen de Salud</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>