<?php
/* @var $this OptionsAtmSoftTissueController */
/* @var $model OptionsAtmSoftTissue */

$this->breadcrumbs=array(
	'Options Atm Soft Tissues'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List OptionsAtmSoftTissue', 'url'=>array('index')),
	array('label'=>'Manage OptionsAtmSoftTissue', 'url'=>array('admin')),
);
?>

<h1>Create OptionsAtmSoftTissue</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>