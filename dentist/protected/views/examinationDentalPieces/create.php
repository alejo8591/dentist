<?php
/* @var $this ExaminationDentalPiecesController */
/* @var $model ExaminationDentalPieces */

$this->breadcrumbs=array(
	'Examination Dental Pieces'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List ExaminationDentalPieces', 'url'=>array('index')),
	array('label'=>'Manage ExaminationDentalPieces', 'url'=>array('admin')),
);
?>

<h1>Create ExaminationDentalPieces</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>