<?php
/* @var $this DentalPiecesController */
/* @var $model DentalPieces */

$this->breadcrumbs=array(
	'Dental Pieces'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List DentalPieces', 'url'=>array('index')),
	array('label'=>'Manage DentalPieces', 'url'=>array('admin')),
);
?>

<h1>Create DentalPieces</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>