<?php
/* @var $this OptionsAtmIntraoralHardTissueController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Options Atm Intraoral Hard Tissues',
);

$this->menu=array(
	array('label'=>'Create OptionsAtmIntraoralHardTissue', 'url'=>array('create')),
	array('label'=>'Manage OptionsAtmIntraoralHardTissue', 'url'=>array('admin')),
);
?>

<h1>Options Atm Intraoral Hard Tissues</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
