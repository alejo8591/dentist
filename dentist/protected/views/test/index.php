<?php
/* @var $this CityController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Address',
);

$this->menu=array(
	array('label'=>'Create City', 'url'=>array('create')),
	array('label'=>'Manage City', 'url'=>array('admin')),
);
?>

<h1>Test</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
