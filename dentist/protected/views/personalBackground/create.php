<?php
/* @var $this PersonalBackgroundController */
/* @var $model PersonalBackground */

$this->breadcrumbs=array(
	'Personal Backgrounds'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Lista de Antecedentes Personales', 'url'=>array('index')),
	// array('label'=>'Manage PersonalBackground', 'url'=>array('admin')),
);
?>

<h1>Crear Antecedentes Personales</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>