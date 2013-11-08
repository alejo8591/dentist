<?php
/* @var $this HealtInstitutionController */
/* @var $model HealtInstitution */

$this->breadcrumbs=array(
	'Healt Institutions'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Listar Entidades', 'url'=>array('index')),
	array('label'=>'Administar Entidades', 'url'=>array('admin')),
);
?>

<h1>Crear Entidad Prestadora de Salud</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>