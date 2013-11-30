<?php
/* @var $this OptionsAtmController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Options Atms',
);

$this->menu=array(
	array('label'=>'Create OptionsAtm', 'url'=>array('create')),
	array('label'=>'Manage OptionsAtm', 'url'=>array('admin')),
);
?>

<h1>Options Atms</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
