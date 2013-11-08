<?php
/* @var $this LevelSchoolingController */
/* @var $model LevelSchooling */

$this->breadcrumbs=array(
	'Level Schoolings'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Listar Niveles de Escolaridad', 'url'=>array('index')),
	array('label'=>'Administrar Niveles', 'url'=>array('admin')),
);
?>

<h1>Crear Nivel de Escolaridad</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>