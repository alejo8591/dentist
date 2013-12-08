<?php
/* @var $this ExaminationDentalPiecesController */
/* @var $model ExaminationDentalPieces */

$this->breadcrumbs=array(
	'Examination Dental Pieces'=>array('index'),
	$model->id_tbl_examination_dental_pieces,
);

$this->menu=array(
	array('label'=>'List ExaminationDentalPieces', 'url'=>array('index')),
	array('label'=>'Create ExaminationDentalPieces', 'url'=>array('create')),
	array('label'=>'Update ExaminationDentalPieces', 'url'=>array('update', 'id'=>$model->id_tbl_examination_dental_pieces)),
	array('label'=>'Delete ExaminationDentalPieces', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_tbl_examination_dental_pieces),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ExaminationDentalPieces', 'url'=>array('admin')),
);
?>

<h1>View ExaminationDentalPieces #<?php echo $model->id_tbl_examination_dental_pieces; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_tbl_examination_dental_pieces',
		'id_tbl_dental_piece',
		'name_examination_dental_pieces',
		'type_examination_dental_pieces',
		'observation_examination_dental_pieces',
		'create_user_id',
		'create_time',
		'update_time',
		'update_user_id',
	),
)); ?>
