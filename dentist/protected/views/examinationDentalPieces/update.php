<?php
/* @var $this ExaminationDentalPiecesController */
/* @var $model ExaminationDentalPieces */

$this->breadcrumbs=array(
	'Examination Dental Pieces'=>array('index'),
	$model->id_tbl_examination_dental_pieces=>array('view','id'=>$model->id_tbl_examination_dental_pieces),
	'Update',
);

$this->menu=array(
	array('label'=>'List ExaminationDentalPieces', 'url'=>array('index')),
	array('label'=>'Create ExaminationDentalPieces', 'url'=>array('create')),
	array('label'=>'View ExaminationDentalPieces', 'url'=>array('view', 'id'=>$model->id_tbl_examination_dental_pieces)),
	array('label'=>'Manage ExaminationDentalPieces', 'url'=>array('admin')),
);
?>

<h1>Update ExaminationDentalPieces <?php echo $model->id_tbl_examination_dental_pieces; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>