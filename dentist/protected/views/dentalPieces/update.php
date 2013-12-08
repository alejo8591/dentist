<?php
/* @var $this DentalPiecesController */
/* @var $model DentalPieces */

$this->breadcrumbs=array(
	'Dental Pieces'=>array('index'),
	$model->id_tbl_dental_piece=>array('view','id'=>$model->id_tbl_dental_piece),
	'Update',
);

$this->menu=array(
	array('label'=>'List DentalPieces', 'url'=>array('index')),
	array('label'=>'Create DentalPieces', 'url'=>array('create')),
	array('label'=>'View DentalPieces', 'url'=>array('view', 'id'=>$model->id_tbl_dental_piece)),
	array('label'=>'Manage DentalPieces', 'url'=>array('admin')),
);
?>

<h1>Update DentalPieces <?php echo $model->id_tbl_dental_piece; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>