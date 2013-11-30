<?php
/* @var $this OptionsAtmIntraoralSoftTissueController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Options Atm Intraoral Soft Tissues',
);

$this->menu=array(
	array('label'=>'Create OptionsAtmIntraoralSoftTissue', 'url'=>array('create')),
	array('label'=>'Manage OptionsAtmIntraoralSoftTissue', 'url'=>array('admin')),
);
?>

<h1>Options Atm Intraoral Soft Tissues</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
