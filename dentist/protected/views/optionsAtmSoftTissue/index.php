<?php
/* @var $this OptionsAtmSoftTissueController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Options Atm Soft Tissues',
);

$this->menu=array(
	array('label'=>'Create OptionsAtmSoftTissue', 'url'=>array('create')),
	array('label'=>'Manage OptionsAtmSoftTissue', 'url'=>array('admin')),
);
?>

<h1>Options Atm Soft Tissues</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
