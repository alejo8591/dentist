<?php
/* @var $this TreatmentDecisionDentalPiecesController */
/* @var $model TreatmentDecisionDentalPieces */

$this->breadcrumbs=array(
	'Treatment Decision Dental Pieces'=>array('index'),
	$model->id_tbl_treatment_decision_dental_piece=>array('view','id'=>$model->id_tbl_treatment_decision_dental_piece),
	'Update',
);

$this->menu=array(
	array('label'=>'List TreatmentDecisionDentalPieces', 'url'=>array('index')),
	array('label'=>'Create TreatmentDecisionDentalPieces', 'url'=>array('create')),
	array('label'=>'View TreatmentDecisionDentalPieces', 'url'=>array('view', 'id'=>$model->id_tbl_treatment_decision_dental_piece)),
	array('label'=>'Manage TreatmentDecisionDentalPieces', 'url'=>array('admin')),
);
?>

<h1>Update TreatmentDecisionDentalPieces <?php echo $model->id_tbl_treatment_decision_dental_piece; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>