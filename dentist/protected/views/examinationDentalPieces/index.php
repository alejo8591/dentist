<?php
/* @var $this ExaminationDentalPiecesController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Examination Dental Pieces',
);

$this->menu=array(
	array('label'=>'Create ExaminationDentalPieces', 'url'=>array('create')),
	array('label'=>'Manage ExaminationDentalPieces', 'url'=>array('admin')),
);
?>

<h1>Examination Dental Pieces</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
