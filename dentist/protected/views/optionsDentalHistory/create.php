<?php
/* @var $this OptionsDentalHistoryController */
/* @var $model OptionsDentalHistory */

$this->breadcrumbs=array(
	'Options Dental Histories'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List OptionsDentalHistory', 'url'=>array('index')),
	array('label'=>'Manage OptionsDentalHistory', 'url'=>array('admin')),
);
?>

<h1>Create OptionsDentalHistory</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>