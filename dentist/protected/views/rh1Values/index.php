<?php
/* @var $this Rh1ValuesController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Rh1 Values',
);

$this->menu=array(
	array('label'=>'Create Rh1Values', 'url'=>array('create')),
	array('label'=>'Manage Rh1Values', 'url'=>array('admin')),
);
?>

<h1>Rh1 Values</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
