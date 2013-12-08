<?php
/* @var $this TreatmentDecisionDentalPiecesController */
/* @var $model TreatmentDecisionDentalPieces */

$this->breadcrumbs=array(
	'Treatment Decision Dental Pieces'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List TreatmentDecisionDentalPieces', 'url'=>array('index')),
	array('label'=>'Manage TreatmentDecisionDentalPieces', 'url'=>array('admin')),
);
?>

<h1>Create TreatmentDecisionDentalPieces</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>