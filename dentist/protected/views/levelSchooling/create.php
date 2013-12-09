<?php
/* @var $this LevelSchoolingController */
/* @var $model LevelSchooling */

$this->breadcrumbs=array(
	'Nivel de Escolaridad'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listar Niveles de Escolaridad', 'url'=>array('index')),
);
?>

<h1>Crear Nivel de Escolaridad</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>