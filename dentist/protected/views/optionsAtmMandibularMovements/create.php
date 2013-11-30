<?php
/* @var $this OptionsAtmMandibularMovementsController */
/* @var $model OptionsAtmMandibularMovements */

$this->breadcrumbs=array(
	'Options Atm Mandibular Movements'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List OptionsAtmMandibularMovements', 'url'=>array('index')),
	array('label'=>'Manage OptionsAtmMandibularMovements', 'url'=>array('admin')),
);
?>

<h1>Create OptionsAtmMandibularMovements</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>