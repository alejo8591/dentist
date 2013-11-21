<?php
/* @var $this OptionsNeckController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Options Necks',
);

$this->menu=array(
	array('label'=>'Create OptionsNeck', 'url'=>array('create')),
	array('label'=>'Manage OptionsNeck', 'url'=>array('admin')),
);
?>

<h1>Options Necks</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
