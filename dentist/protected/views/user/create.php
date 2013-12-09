<?php
/* @var $this UserController */
/* @var $model User */

$this->breadcrumbs=array(
	'Usuario'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Lista de Usuarios', 'url'=>array('index')),
);
?>

<h1>Crear Usuario</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>