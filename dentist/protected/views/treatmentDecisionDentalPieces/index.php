<?php
/* @var $this TreatmentDecisionDentalPiecesController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Treatment Decision Dental Pieces',
);

$this->menu=array(
	array('label'=>'Create TreatmentDecisionDentalPieces', 'url'=>array('create')),
	array('label'=>'Manage TreatmentDecisionDentalPieces', 'url'=>array('admin')),
);
?>

<h1>Treatment Decision Dental Pieces</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
