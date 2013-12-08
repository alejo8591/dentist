<?php
/* @var $this DentalPiecesController */
/* @var $model DentalPieces */

$this->breadcrumbs=array(
	'Dental Pieces'=>array('index'),
	$model->id_tbl_dental_piece,
);

$this->menu=array(
	array('label'=>'List DentalPieces', 'url'=>array('index')),
	array('label'=>'Create DentalPieces', 'url'=>array('create')),
	array('label'=>'Update DentalPieces', 'url'=>array('update', 'id'=>$model->id_tbl_dental_piece)),
	array('label'=>'Delete DentalPieces', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_tbl_dental_piece),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage DentalPieces', 'url'=>array('admin')),
);
?>

<h1>View DentalPieces #<?php echo $model->id_tbl_dental_piece; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_tbl_dental_piece',
		'id_tbl_dental_examination',
		'number_dental_piece',
		'observation_dental_piece',
		'create_user_id',
		'create_time',
		'update_user_id',
		'update_time',
	),
)); ?>
