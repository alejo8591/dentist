<?php
/* @var $this OptionsDentalHistoryController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Options Dental Histories',
);

$this->menu=array(
	array('label'=>'Create OptionsDentalHistory', 'url'=>array('create')),
	array('label'=>'Manage OptionsDentalHistory', 'url'=>array('admin')),
);
?>

<h1>Options Dental Histories</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
