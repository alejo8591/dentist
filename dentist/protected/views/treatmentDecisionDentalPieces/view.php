<?php
/* @var $this TreatmentDecisionDentalPiecesController */
/* @var $model TreatmentDecisionDentalPieces */

$this->breadcrumbs=array(
	'Treatment Decision Dental Pieces'=>array('index'),
	$model->id_tbl_treatment_decision_dental_piece,
);

$this->menu=array(
	array('label'=>'List TreatmentDecisionDentalPieces', 'url'=>array('index')),
	array('label'=>'Create TreatmentDecisionDentalPieces', 'url'=>array('create')),
	array('label'=>'Update TreatmentDecisionDentalPieces', 'url'=>array('update', 'id'=>$model->id_tbl_treatment_decision_dental_piece)),
	array('label'=>'Delete TreatmentDecisionDentalPieces', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_tbl_treatment_decision_dental_piece),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TreatmentDecisionDentalPieces', 'url'=>array('admin')),
);
?>

<h1>View TreatmentDecisionDentalPieces #<?php echo $model->id_tbl_treatment_decision_dental_piece; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_tbl_treatment_decision_dental_piece',
		'id_tbl_dental_piece',
		'name_treatment_decision_dental_piece',
		'type_treatment_decision_dental_piece',
		'observation_treatment_decision_dental_piece',
		'create_user_id',
		'create_time',
		'update_time',
		'update_user_id',
	),
)); ?>
