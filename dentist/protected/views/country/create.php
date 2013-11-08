<?php
/* @var $this CountryController */
/* @var $model Country */

$this->breadcrumbs=array(
	'Countries'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Listar Paises', 'url'=>array('index')),
	array('label'=>'Administrar Paises', 'url'=>array('admin')),
);
?>

<h1>Crear País</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>