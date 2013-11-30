<?php
/* @var $this OptionsAtmIntraoralSoftTissueController */
/* @var $model OptionsAtmIntraoralSoftTissue */

$this->breadcrumbs=array(
	'Options Atm Intraoral Soft Tissues'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List OptionsAtmIntraoralSoftTissue', 'url'=>array('index')),
	array('label'=>'Manage OptionsAtmIntraoralSoftTissue', 'url'=>array('admin')),
);
?>

<h1>Create OptionsAtmIntraoralSoftTissue</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>