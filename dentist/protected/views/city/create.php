<?php
/* @var $this CityController */
/* @var $model City */

$this->breadcrumbs=array(
	'Ciudades'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listar Ciudades', 'url'=>array('index')),
	array('label'=>'Administrar Ciudades', 'url'=>array('admin')),
);
?>

<h1>Crear Ciudad</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>