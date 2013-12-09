<?php
/* @var $this ProfessionController */
/* @var $model Profession */

$this->breadcrumbs=array(
	'Profesiones'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listar Profesiones', 'url'=>array('index')),);
?>

<h1>Crear Profesión</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>