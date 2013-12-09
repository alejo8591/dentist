<?php
/* @var $this HealtInstitutionController */
/* @var $model HealtInstitution */

$this->breadcrumbs=array(
	'Instituciones de Salud'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listar Entidades', 'url'=>array('index')),
);
?>

<h1>Crear Entidad Prestadora de Salud</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>