<?php
/* @var $this OptionsAtmIntraoralHardTissueController */
/* @var $model OptionsAtmIntraoralHardTissue */

$this->breadcrumbs=array(
	'Options Atm Intraoral Hard Tissues'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List OptionsAtmIntraoralHardTissue', 'url'=>array('index')),
	array('label'=>'Manage OptionsAtmIntraoralHardTissue', 'url'=>array('admin')),
);
?>

<h1>Create OptionsAtmIntraoralHardTissue</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>