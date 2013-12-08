<?php
/* @var $this DentalPiecesController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Dental Pieces',
);

$this->menu=array(
	array('label'=>'Create DentalPieces', 'url'=>array('create')),
	array('label'=>'Manage DentalPieces', 'url'=>array('admin')),
);
?>

<h1>Dental Pieces</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
